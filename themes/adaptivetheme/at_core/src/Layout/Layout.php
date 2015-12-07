<?php

/**
 * @file
 * Contains \Drupal\at_core\Layout\Layout
 */

namespace Drupal\at_core\Layout;

use Drupal\Core\Cache;
use Symfony\Component\Yaml\Parser;
use Drupal\at_core\File\ParseFile;

class Layout implements LayoutInterface {

  protected $theme_name;
  protected $layout_markup;
  protected $layout_css;
  protected $layout_name;

  /**
   * Layout constructor.
   * @param $theme_name
   * @param $layout_name
   */
  public function __construct($theme_name, $layout_name) {
    $this->theme_name = $theme_name;
    $this->layout_name = $layout_name;
    $this->layout_path = drupal_get_path('theme', $this->theme_name) . '/layout/' . $this->layout_name;
    $this->layout_cid = $this->theme_name . ':' . $this->layout_name;
  }

  /**
   * {@inheritdoc}
   */
  public function LayoutConfig($type) {
    $config_data = array();

    if ($cache = \Drupal::cache()->get($this->layout_cid . ':' . $type)) {
      $config_data = $cache->data;
    }
    else {
      $config_file = $this->layout_path . '/' . $this->layout_name . '.' . $type . '.yml';

      if (file_exists($config_file)) {
        $parser = new Parser();
        $config_data = $parser->parse(file_get_contents($config_file));
      }

      if (!empty($config_data)) {
        \Drupal::cache()->set($this->layout_cid . ':' . $type, $config_data);
      }
    }

    return $config_data;
  }

  /**
   * {@inheritdoc}
   */
  public function getLayoutMarkup() {
    return $this->LayoutConfig(LayoutInterface::LayoutMarkup);
  }

  /**
   * {@inheritdoc}
   */
  public function getLayoutCSS() {
    return $this->LayoutConfig(LayoutInterface::LayoutCSS);
  }

  /**
   * {@inheritdoc}
   */
  public function getLayoutName() {
    return $this->layout_name;
  }

}
