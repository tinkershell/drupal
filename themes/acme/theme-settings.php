<?php

/**
 * Implimentation of hook_form_system_theme_settings_alter()
 *
 * @param $form
 *   Nested array of form elements that comprise the form.
 *
 * @param $form_state
 *   A keyed array containing the current state of the form.
 */
function acme_form_system_theme_settings_alter(&$form, &$form_state, $form_id = NULL) {

      $form['copyright_holder'] = array(
          'type' => 'textfield',
          '#title' => t('Copyright Holder'),
          'default_value' => theme_get_setting('copyright_holder'),
          '#description' => t('This appears in the footer'),
          '#weight' => -10,
      );
      $form['search_placeholder'] = array(
          '#type'=> 'textfield',
          '#title' => t('Search Placeholder'),
          '#defaut_value' => theme_get_setting('search_placeholder'),
          '#description' => t('This appears in the footer'),
          '#weight' => -10,
      );
}
