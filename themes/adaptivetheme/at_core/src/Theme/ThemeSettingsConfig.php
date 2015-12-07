<?php

/**
 * @file
 * Contains \Drupal\at_core\Theme\ThemeSettingsConfig.
 */

namespace Drupal\at_core\Theme;

use Drupal\Core\Config\Config;
use Drupal\Component\Utility\Unicode;

class ThemeSettingsConfig {

  /**
 * Set config for theme Extension settings.
 * @param array $values
 * @param \Drupal\Core\Config\Config $config
 */
  public function settingsExtensionsConvertToConfig(array $values, Config $config) {
    foreach ($values as $key => $value) {
      if (substr($key, 0, 9) == 'settings_') {
        $config_key = Unicode::substr($key, 9);
        $config_save = $config->set('settings.' . $config_key, $value);
      }
    }
    if (is_object($config_save)) {
      $config_save->save();
    }
  }

  /**
   * Set config for theme Layout settings.
   * @param array $values
   * @param \Drupal\Core\Config\Config $config
   */
  public function settingsLayoutConvertToConfig(array $values, Config $config) {
    foreach ($values as $key => $value) {
      if (substr($key, 0, 9) == 'settings_') {
        $config_key = Unicode::substr($key, 9);
        $config_save = $config->set('settings.' . $config_key, $value);
      }
      // Delete suggestions config settings. Do not remove all the suggestions
      // setting because later on if the suggestion is recreated there will be
      // settings for it already which is kind of nice for the user should they
      // accidentally delete a suggestion.
      if (substr($key, 0, 18) == 'delete_suggestion_') {
        $delete_suggestion_key = 'settings.suggestion_' . Unicode::substr($key, 18);
        if ($value == 1) {
          $config_delete = $config->clear($delete_suggestion_key, $value);
        }
      }
    }
    if (is_object($config_save)) {
      $config_save->save();
    }
    if (is_object($config_delete)) {
      $config_delete->save();
    }
  }
}
