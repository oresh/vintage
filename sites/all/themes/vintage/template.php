<?php
/**
 * @file
 * Write your theme logic here.
 */


function vintage_form_alter(&$form, &$form_state) {
  if ($form['#id'] == 'views-exposed-form-gallery-panel-pane-1') {
    $form['title']['#attributes']['placeholder'] = t('Search...');
  }
  if ($form['#id'] == 'webform-client-form-53') {
    global $user;
    $us = user_load($user->uid);
    if (!empty($us->field_phone_number)) {
      $form['submitted']['phone']['#default_value'] = $us->field_phone_number['und'][0]['safe_value'];
    }
    if (!empty($us->field_first_second_name)) {
      $form['submitted']['name']['#default_value'] = $us->field_first_second_name ['und'][0]['safe_value'];
    }
  }
}