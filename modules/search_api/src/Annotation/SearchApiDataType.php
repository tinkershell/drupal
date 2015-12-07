<?php

/**
 * @file
 * Contains \Drupal\search_api\Annotation\SearchApiDataType.
 */

namespace Drupal\search_api\Annotation;

use Drupal\Component\Annotation\Plugin;

/**
 * Defines a Search API data type annotation object.
 *
 * @see \Drupal\search_api\DataType\DataTypePluginManager
 * @see \Drupal\search_api\DataType\DataTypeInterface
 * @see \Drupal\search_api\DataType\DataTypePluginBase
 * @see plugin_api
 *
 * @Annotation
 */
class SearchApiDataType extends Plugin {

  /**
   * The data type plugin ID.
   *
   * @var string
   */
  public $id;

  /**
   * The human-readable name of the data type plugin.
   *
   * @ingroup plugin_translatable
   *
   * @var \Drupal\Core\Annotation\Translation
   */
  public $label;

  /**
   * The description of the data type.
   *
   * @ingroup plugin_translatable
   *
   * @var \Drupal\Core\Annotation\Translation
   */
  public $description;

}
