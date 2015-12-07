<?php

/**
 * @file
 * Contains \Drupal\search_api\Plugin\search_api\processor\ContentAccess.
 */

namespace Drupal\search_api\Plugin\search_api\processor;

use Drupal\comment\CommentInterface;
use Drupal\comment\Entity\Comment;
use Drupal\Core\Database\Database;
use Drupal\Core\Logger\LoggerChannelInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Session\AnonymousUserSession;
use Drupal\Core\TypedData\ComplexDataInterface;
use Drupal\node\NodeInterface;
use Drupal\search_api\Datasource\DatasourceInterface;
use Drupal\search_api\Property\BasicProperty;
use Drupal\search_api\Property\ProxyProperty;
use Drupal\search_api\SearchApiException;
use Drupal\search_api\IndexInterface;
use Drupal\search_api\Processor\ProcessorPluginBase;
use Drupal\search_api\Query\QueryInterface;
use Drupal\search_api\Utility;
use Drupal\user\Entity\User;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * @SearchApiProcessor(
 *   id = "content_access",
 *   label = @Translation("Content access"),
 *   description = @Translation("Adds content access checks for nodes and comments."),
 *   stages = {
 *     "preprocess_index" = 0,
 *     "preprocess_query" = 0
 *   }
 * )
 */
class ContentAccess extends ProcessorPluginBase {

  /**
   * The logger to use for logging messages.
   *
   * @var \Drupal\Core\Logger\LoggerChannelInterface|null
   */
  protected $logger;

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    /** @var static $processor */
    $processor = parent::create($container, $configuration, $plugin_id, $plugin_definition);

    /** @var \Drupal\Core\Logger\LoggerChannelInterface $logger */
    $logger = $container->get('logger.factory')->get('search_api');
    $processor->setLogger($logger);

    return $processor;
  }

  /**
   * Retrieves the logger to use.
   *
   * @return \Drupal\Core\Logger\LoggerChannelInterface
   *   The logger to use.
   */
  public function getLogger() {
    return $this->logger ?: \Drupal::service('logger.factory')->get('search_api');
  }

  /**
   * Sets the logger to use.
   *
   * @param \Drupal\Core\Logger\LoggerChannelInterface $logger
   *   The logger to use.
   */
  public function setLogger(LoggerChannelInterface $logger) {
    $this->logger = $logger;
  }

  /**
   * {@inheritdoc}
   */
  public static function supportsIndex(IndexInterface $index) {
    foreach ($index->getDatasources() as $datasource) {
      if (in_array($datasource->getEntityTypeId(), array('node', 'comment'))) {
        return TRUE;
      }
    }
    return FALSE;
  }

  /**
   * {@inheritdoc}
   */
  public function alterPropertyDefinitions(array &$properties, DatasourceInterface $datasource = NULL) {
    if ($datasource) {
      $entity_type = $datasource->getEntityTypeId();
      if (in_array($entity_type, array('node', 'comment'))) {
        $properties['status'] = ProxyProperty::create($properties['status'])->setLocked();
        if ($entity_type == 'node') {
          $properties['uid'] = ProxyProperty::create($properties['uid'])->setLocked();
        }
      }
      return;
    }

    $definition = array(
      'label' => $this->t('Node access information'),
      'description' => $this->t('Data needed to apply node access.'),
      'type' => 'string',
    );
    $properties['search_api_node_grants'] = BasicProperty::createFromDefinition($definition)->setLocked()->setHidden();
  }

  /**
   * {@inheritdoc}
   */
  public function preprocessIndexItems(array &$items) {
    static $anonymous_user;

    if (!isset($anonymous_user)) {
      // Load the anonymous user.
      $anonymous_user = new AnonymousUserSession();
    }

    // Annoyingly, this doc comment is needed for PHPStorm. See
    // http://youtrack.jetbrains.com/issue/WI-23586
    /** @var \Drupal\search_api\Item\ItemInterface $item */
    foreach ($items as $item) {
      // Only run for node and comment items.
      if (!in_array($item->getDatasource()->getEntityTypeId(), array('node', 'comment'))) {
        continue;
      }

      // Bail if the field is not indexed.
      if (!($field = $item->getField('search_api_node_grants'))) {
        continue;
      }

      // Get the node object.
      $node = $this->getNode($item->getOriginalObject());
      if (!$node) {
        // Apparently we were active for a wrong item.
        continue;
      }

      // Collect grant information for the node.
      if (!$node->access('view', $anonymous_user)) {
        // If anonymous user has no permission we collect all grants with their
        // realms in the item.
        $result = Database::getConnection()->query('SELECT * FROM {node_access} WHERE (nid = 0 OR nid = :nid) AND grant_view = 1', array(':nid' => $node->id()));
        foreach ($result as $grant) {
          $field->addValue("node_access_{$grant->realm}:{$grant->gid}");
        }
      }
      else {
        // Add the generic pseudo view grant if we are not using node access or
        // the node is viewable by anonymous users.
        $field->addValue('node_access__all');
      }
    }
  }

  /**
   * Retrieves the node related to an indexed search object.
   *
   * Will be either the node itself, or the node the comment is attached to.
   *
   * @param \Drupal\Core\TypedData\ComplexDataInterface $item
   *   A search object that is being indexed.
   *
   * @return \Drupal\node\NodeInterface|null
   *   The node related to that search object.
   */
  protected function getNode(ComplexDataInterface $item) {
    $item = $item->getValue();
    if ($item instanceof CommentInterface) {
      $item = $item->getCommentedEntity();
    }
    if ($item instanceof NodeInterface) {
      return $item;
    }

    return NULL;
  }

  /**
   * {@inheritdoc}
   */
  public function preprocessSearchQuery(QueryInterface $query) {
    if (!$query->getOption('search_api_bypass_access')) {
      $account = $query->getOption('search_api_access_account', \Drupal::currentUser());
      if (is_numeric($account)) {
        $account = User::load($account);
      }
      if (is_object($account)) {
        try {
          $this->addNodeAccess($query, $account);
        }
        catch (SearchApiException $e) {
          watchdog_exception('search_api', $e);
        }
      }
      else {
        $account = $query->getOption('search_api_access_account', \Drupal::currentUser());
        if ($account instanceof AccountInterface) {
          $account = $account->id();
        }
        if (!is_scalar($account)) {
          $account = var_export($account, TRUE);
        }
        $this->getLogger()->warning('An illegal user UID was given for node access: @uid.', array('@uid' => $account));
      }
    }
  }

  /**
   * Adds a node access filter to a search query, if applicable.
   *
   * @param \Drupal\search_api\Query\QueryInterface $query
   *   The query to which a node access filter should be added, if applicable.
   * @param \Drupal\Core\Session\AccountInterface $account
   *   The user for whom the search is executed.
   *
   * @throws \Drupal\search_api\SearchApiException
   *   Thrown if not all necessary fields are indexed on the index.
   */
  protected function addNodeAccess(QueryInterface $query, AccountInterface $account) {
    // Don't do anything if the user can access all content.
    if ($account->hasPermission('bypass node access')) {
      return;
    }

    // Gather the affected datasources, grouped by entity type, as well as the
    // unaffected ones.
    $affected_datasources = array();
    $unaffected_datasources = array();
    foreach ($this->index->getDatasources() as $datasource_id => $datasource) {
      $entity_type = $datasource->getEntityTypeId();
      if (in_array($entity_type, array('node', 'comment'))) {
        $affected_datasources[$entity_type][] = $datasource_id;
      }
      else {
        $unaffected_datasources[] = $datasource_id;
      }
    }

    // The filter structure we want looks like this:
    //   [belongs to other datasource]
    //   OR
    //   (
    //     [is enabled (or was created by the user, if applicable)]
    //     AND
    //     [grants view access to one of the user's gid/realm combinations]
    //   )
    // If there are no "other" datasources, we don't need the nested OR,
    // however, and can add the "ADD"
    // @todo Add a filter tag, once they are implemented.
    if ($unaffected_datasources) {
      $outer_filter = $query->createFilter('OR');
      $query->filter($outer_filter);
      foreach ($unaffected_datasources as $datasource_id) {
        $outer_filter->condition('search_api_datasource', $datasource_id);
      }
      $access_filter = $query->createFilter('AND');
      $outer_filter->filter($access_filter);
    }
    else {
      $access_filter = $query;
    }

    if (!$account->hasPermission('access content')) {
      unset($affected_datasources['node']);
    }
    if (!$account->hasPermission('access comments')) {
      unset($affected_datasources['comment']);
    }

    // If the user does not have the permission to see any content at all, deny
    // access to all items from affected datasources.
    if (!$affected_datasources) {
      // If there were "other" datasources, the existing filter will already
      // remove all results of node or comment datasources. Otherwise, we should
      // not return any results at all.
      if (!$unaffected_datasources) {
        // @todo More elegant way to return no results?
        $query->condition('search_api_language', '');
      }
      return;
    }

    // Collect all the required fields that need to be part of the index.
    $unpublished_own = $account->hasPermission('view own unpublished content');

    $enabled_filter = $query->createFilter('OR');
    foreach ($affected_datasources as $entity_type => $datasources) {
      $published = ($entity_type == 'node') ? NODE_PUBLISHED : Comment::PUBLISHED;
      foreach ($datasources as $datasource_id) {
        // If this is a comment datasource, or users cannot view their own
        // unpublished nodes, a simple filter on "status" is enough. Otherwise,
        // it's a bit more complicated.
        $status_field = Utility::createCombinedId($datasource_id, 'status');
        $enabled_filter->condition($status_field, $published);
        if ($entity_type == 'node' && $unpublished_own) {
          $author_field = Utility::createCombinedId($datasource_id, 'uid');
          $enabled_filter->condition($author_field, $account->id());
        }
      }
    }
    $access_filter->filter($enabled_filter);

    // Filter by the user's node access grants.
    $grants_filter = $query->createFilter('OR');
    $grants = node_access_grants('view', $account);
    foreach ($grants as $realm => $gids) {
      foreach ($gids as $gid) {
        $grants_filter->condition('search_api_node_grants', "node_access_$realm:$gid");
      }
    }
    // Also add items that are accessible for everyone by checking the "access
    // all" pseudo grant.
    $grants_filter->condition('search_api_node_grants', 'node_access__all');
    $access_filter->filter($grants_filter);
  }

}
