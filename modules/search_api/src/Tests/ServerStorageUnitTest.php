<?php

/**
 * @file
 * Contains \Drupal\search_api\Tests\ServerStorageUnitTest.
 */

namespace Drupal\search_api\Tests;

use Drupal\Core\Config\Entity\ConfigEntityStorage;
use Drupal\search_api\ServerInterface;
use Drupal\simpletest\KernelTestBase;

/**
 * Tests whether the storage of search servers works correctly.
 *
 * @group search_api
 */
class ServerStorageUnitTest extends KernelTestBase {

  /**
   * Modules to enable for this test.
   *
   * @var string[]
   */
  public static $modules = array('search_api', 'search_api_test_backend');

  /**
   * The search server storage.
   *
   * @var \Drupal\Core\Config\Entity\ConfigEntityStorageInterface
   */
  protected $storage;

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();

    $this->installSchema('search_api', array('search_api_task'));
    $this->storage = $this->container->get('entity.manager')->getStorage('search_api_server');
  }

  /**
   * Tests all CRUD operations as a queue of operations.
   */
  public function testIndexCRUD() {
    $this->assertTrue($this->storage instanceof ConfigEntityStorage, 'The Search API Server storage controller is loaded.');

    $server = $this->serverCreate();
    $this->serverLoad($server);
    $this->serverDelete($server);
  }

  /**
   * Tests whether creating a server works correctly.
   *
   * @return \Drupal\search_api\ServerInterface
   *   The newly created search server.
   */
  public function serverCreate() {
    $serverData = array(
      'id' => $this->randomMachineName(),
      'name' => $this->randomString(),
      'backend' => 'search_api_test_backend',
    );
    $server = $this->storage->create($serverData);

    $this->assertTrue($server instanceof ServerInterface, 'The newly created entity is a Search API Server.');
    $server->save();

    return $server;
  }

  /**
   * Tests whether loading a server works correctly.
   *
   * @param \Drupal\search_api\ServerInterface $server
   *   The server used for this test.
   */
  public function serverLoad(ServerInterface $server) {
    $loaded_server = $this->storage->load($server->id());
    $this->assertIdentical($server->label(), $loaded_server->label());
  }

  /**
   * Tests whether deleting a server works correctly.
   *
   * @param \Drupal\search_api\ServerInterface $server
   *   The server used for this test.
   */
  public function serverDelete(ServerInterface $server) {
    $this->storage->delete(array($server));
    $loaded_server = $this->storage->load($server->id());
    $this->assertNull($loaded_server);
  }

}
