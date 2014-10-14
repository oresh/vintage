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

function vintage_preprocess_panels_pane(&$vars) {
  if (isset($vars['pane']->type) && $vars['pane']->type == 'page_site_name') {
    $vars['content'] = l($vars['content'], '<front>');
  }
  //dpm($vars);
}

function vintage_preprocess_node(&$vars) {
    $vars['theme_hook_suggestions'][] = 'node__' . $vars['type'] . '__' . $vars['view_mode'];
}