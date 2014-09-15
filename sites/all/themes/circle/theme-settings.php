<?php
/**
 * @file
 * Circle theme settings implementation.
 */

/**
 * Circle theme settings. Add custom settings in subtheme theme-settings file.
 */
function circle_form_system_theme_settings_alter(&$form, $form_state) {

  $libraries_exists = module_exists('libraries');
  $bootstrap_available = libraries_get_path('bootstrap') != FALSE;
  $foundation4_available = libraries_get_path('foundation4') != FALSE;
  $foundation5_available = libraries_get_path('foundation5') != FALSE;
  $modernizr_available = libraries_get_path('modernizr') != FALSE;
  $html_shiv_available = libraries_get_path('htmlshiv') != FALSE;

  $form['circle_info'] = array(
    '#prefix' => '<h3>Circle Theme Settings:</h3> ',
    '#weight' => -40,
  );

  // CSS Settings.
  $form['css'] = array(
    '#type'        => 'fieldset',
    '#title'       => '<b> &rarr; </b> ' . t('CSS Settings'),
    '#collapsible' => TRUE,
    '#collapsed'   => TRUE,
    '#weight'      => -35,
  );
  $form['css']['circle_clearcss'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Remove system css.'),
    '#default_value' => theme_get_setting('circle_clearcss'),
    '#description'   => t('Remove several CSS files of core modules. List is located in: <em>circle/includes/css.template.inc</em>'),
  );
  $form['css']['circle_css_normalize'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Include normalize.css'),
    '#default_value' => theme_get_setting('circle_css_normalize'),
    '#description'   => t('File is located in <em>circle/css/normalize.css</em>'),
  );
  $form['css']['circle_css_layout'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Include Circle layout styles.'),
    '#default_value' => theme_get_setting('circle_css_layout'),
    '#description'   => t('File is located in <em>circle/css/circle-layout.css</em>'),
  );
  $form['css']['circle_css_circlestyles'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Include Circle base styles.'),
    '#default_value' => theme_get_setting('circle_css_circlestyles'),
    '#description'   => t('File is located in <em>circle/css/circle.css</em>'),
  );
  $form['css']['circle_css_ie'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Include IE stylesheets.'),
    '#default_value' => theme_get_setting('circle_css_ie'),
    '#description'   => t('ie8.css, ie9.css and ie.css in starterkit folder will be used.'),
  );
  $form['css']['circle_css_onefile'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('<strong>Use with care:</strong> Aggregate all css files into 1 file.'),
    '#default_value' => theme_get_setting('circle_css_onefile'),
    '#description'   => t('This will improve your page load time, but Use with care.'),
  );

  // Boostrap settings.
  $form['bootstrap'] = array(
    '#type'        => 'fieldset',
    '#title'       => '<b> &rarr; </b> ' . t('Bootstrap settings'),
    '#collapsible' => TRUE,
    '#collapsed'   => TRUE,
    '#weight'      => -33,
  );
  $form['bootstrap']['circle_css_bootstrap'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Add Bootstrap 3 styles via CDN.'),
    '#default_value' => theme_get_setting('circle_css_bootstrap'),
    '#description'   => t('CDN Link: <em>//netdna.bootstrapcdn.com/bootstrap/VERSION/css/bootstrap.min.css</em>'),
  );
  $form['bootstrap']['circle_css_bootstrap_version'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Bootstrap CSS version.'),
    '#default_value' => theme_get_setting('circle_css_bootstrap_version'),
    '#description'   => t('Specify the version of Bootstrap CSS. Ex.: <em>3.0.2</em>'),
    '#states' => array(
      'invisible' => array(
        ':input[name="circle_css_bootstrap"]' => array('checked' => FALSE),
      ),
    ),
  );
  $form['bootstrap']['circle_js_bootstrap'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Add Bootstrap 3 javaScript via CDN.'),
    '#default_value' => theme_get_setting('circle_js_bootstrap'),
    '#description'   => t('CDN Link: <em>//netdna.bootstrapcdn.com/bootstrap/VERSION/js/bootstrap.min.js</em>'),
  );
  $form['bootstrap']['circle_js_bootstrap_version'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Bootstrap javaScript version.'),
    '#default_value' => theme_get_setting('circle_js_bootstrap_version'),
    '#description'   => t('Specify the version of Bootstrap JavaScript. Ex.: <em>3.0.2</em>'),
    '#states' => array(
      'invisible' => array(
        ':input[name="circle_js_bootstrap"]' => array('checked' => FALSE),
      ),
    ),
  );
  $form['bootstrap']['circle_css_bootstrap_local'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Add Bootstrap CSS locally.'),
    '#default_value' => theme_get_setting('circle_css_bootstrap_local'),
    '#description'   => $libraries_exists ? t('File is taken from a locally installed library in libraries folder <em>(libraries/bootstrap)</em>.') : t('Install and enable !libraries module to use this setting.', array('!libraries' => l(t('Libraries'), 'http://drupal.org/project/libraries'))),
    '#disabled' => !$libraries_exists || !$bootstrap_available,
  );

  $form['bootstrap']['circle_js_bootstrap_local'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Add Bootstrap JavaScript locally.'),
    '#default_value' => theme_get_setting('circle_js_bootstrap_local'),
    '#description'   => $libraries_exists ? t('File is taken from a locally installed library in libraries folder <em>(libraries/bootstrap)</em>.') : t('Install and enable !libraries module to use this setting.', array('!libraries' => l(t('Libraries'), 'http://drupal.org/project/libraries'))),
    '#disabled' => !$libraries_exists || !$bootstrap_available,
  );

  // Foundation settings.
  $form['foundation'] = array(
    '#type'        => 'fieldset',
    '#title'       => '<b> &rarr; </b> ' . t('Foundation settings'),
    '#collapsible' => TRUE,
    '#collapsed'   => TRUE,
    '#weight'      => -33,
  );
  $form['foundation']['circle_css_foundation'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Add Foundation styles via CDN.'),
    '#default_value' => theme_get_setting('circle_css_foundation'),
    '#description'   => t('CDN Link: <em>//cdn.jsdelivr.net/foundation/VERSION/css/foundation.min.css</em>'),
  );
  $form['foundation']['circle_css_foundation_version'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Foundation CSS version.'),
    '#default_value' => theme_get_setting('circle_css_foundation_version'),
    '#description'   => t('Specify the version of Foundation CSS. Ex.: 4.3.2'),
    '#states' => array(
      'invisible' => array(
        ':input[name="circle_css_foundation"]' => array('checked' => FALSE),
      ),
    ),
  );
  $form['foundation']['circle_js_foundation'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Add Foundation JavaScript via CDN.'),
    '#default_value' => theme_get_setting('circle_js_foundation'),
    '#description'   => t('CDN Link: <em>//cdnjs.cloudflare.com/ajax/libs/foundation/VERSION/js/foundation.min.js</em>'),
  );
  $form['foundation']['circle_js_foundation_version'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Foundation JavaScript version.'),
    '#default_value' => theme_get_setting('circle_js_foundation_version'),
    '#description'   => t('Specify the version of Foundation JavaScript. Ex.: 4.3.2'),
    '#states' => array(
      'invisible' => array(
        ':input[name="circle_js_foundation"]' => array('checked' => FALSE),
      ),
    ),
  );
  $form['foundation']['circle_css_foundation_local'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Add Foundation 4 CSS locally.'),
    '#default_value' => theme_get_setting('circle_css_foundation_local'),
    '#description'   => $libraries_exists ? t('File is taken from a locally installed library in libraries folder <em>(libraries/foundation)</em>.') : t('Install and enable !libraries module to use this setting.', array('!libraries' => l(t('Libraries'), 'http://drupal.org/project/libraries'))),
    '#disabled' => !$libraries_exists || !$foundation4_available,
  );
  $form['foundation']['circle_js_foundation_local'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Add Foundation 4 JavaScript locally.'),
    '#default_value' => theme_get_setting('circle_js_foundation_local'),
    '#description'   => $libraries_exists ? t('File is taken from a locally installed library in libraries folder <em>(libraries/foundation)</em>.') : t('Install and enable !libraries module to use this setting.', array('!libraries' => l(t('Libraries'), 'http://drupal.org/project/libraries'))),
    '#disabled' => !$libraries_exists || !$foundation4_available,
  );

  $form['foundation']['circle_css_foundation5_local'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Add Foundation 5 CSS locally.'),
    '#default_value' => theme_get_setting('circle_css_foundation5_local'),
    '#description'   => $libraries_exists ? t('File is taken from a locally installed library in libraries folder <em>(libraries/foundation5)</em>.') : t('Install and enable !libraries module to use this setting.', array('!libraries' => l(t('Libraries'), 'http://drupal.org/project/libraries'))),
    '#disabled' => !$libraries_exists || !$foundation5_available,
  );
  $form['foundation']['circle_js_foundation5_local'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Add Foundation 5 JavaScript locally.'),
    '#default_value' => theme_get_setting('circle_js_foundation5_local'),
    '#description'   => $libraries_exists ? t('File is taken from a locally installed library in libraries folder <em>(libraries/foundation5)</em>.') : t('Install and enable !libraries module to use this setting.', array('!libraries' => l(t('Libraries'), 'http://drupal.org/project/libraries'))),
    '#disabled' => !$libraries_exists || !$foundation5_available,
  );

  // JavaScript settings.
  $form['js'] = array(
    '#type'        => 'fieldset',
    '#title'       => '<b> &rarr; </b> ' . t('JavaScript Settings'),
    '#collapsible' => TRUE,
    '#collapsed'   => TRUE,
    '#weight'      => -30,
  );
  $form['js']['circle_modernizr'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Add modernizr.js via CDN'),
    '#default_value' => theme_get_setting('circle_modernizr'),
    '#description'   => t('CDN Link: <em>http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.0.6/modernizr.min.js</em>'),
  );
  $form['js']['circle_modernizr_local'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Add modernizr.js locally.'),
    '#default_value' => theme_get_setting('circle_modernizr_local'),
    '#description'   => $libraries_exists ? t('File is taken from a locally installed library in libraries folder<em>(libraries/modernizr)</em>.') : t('Install and enable !libraries module to use this setting.', array('!libraries' => l(t('Libraries'), 'http://drupal.org/project/libraries'))),
    '#disabled' => !$libraries_exists|| !$modernizr_available,
  );
  $form['js']['circle_js_htmlshiv'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Add html5 support<em>(html5shiv)</em> for old browsers via CDN'),
    '#default_value' => theme_get_setting('circle_js_htmlshiv'),
    '#description'   => t('CDN Link: <em>http://html5shiv.googlecode.com/svn/trunk/html5.js</em>'),
  );
  $form['js']['circle_js_htmlshiv_local'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Add html5 support<em>(html5shiv)</em> for old browsers locally'),
    '#default_value' => theme_get_setting('circle_js_htmlshiv_local'),
    '#description'   => $libraries_exists ? t('File is taken from a locally installed library in libraries folder <em>(libraries/htmlshiv)</em>.') : t('Install and enable !libraries module to use this setting.', array('!libraries' => l(t('Libraries'), 'http://drupal.org/project/libraries'))),
    '#disabled' => !$libraries_exists || !$html_shiv_available,
  );

  $form['js']['circle_js_placeholder'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Add placeholder support for IE.'),
    '#default_value' => theme_get_setting('circle_js_placeholder'),
    '#description'   => t('Placeholder.js official !link.', array('!link' => l(t('Github page'), 'https://github.com/NV/placeholder.js'))),
  );
  $form['js']['circle_js_jquerycdn'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Use jQuery library via CDN.'),
    '#default_value' => theme_get_setting('circle_js_jquerycdn'),
    '#description'   => t('This will improve your page load time. jQuery version can be specified below.'),
  );
  $form['js']['circle_js_jquerycdn_version'] = array(
    '#type'          => 'textfield',
    '#title'         => t('jQuery version.'),
    '#default_value' => theme_get_setting('circle_js_jquerycdn_version'),
    '#description'   => t('Specify the version of jQuery. Ex.: 1.4.4 or 1.8.1'),
    '#states' => array(
      'invisible' => array(
        ':input[name="circle_js_jquerycdn"]' => array('checked' => FALSE),
      ),
    ),
  );
  $form['js']['circle_footer_js'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('<strong>Use with care:</strong> Place all scripts in footer.'),
    '#default_value' => theme_get_setting('circle_footer_js'),
    '#description'   => t('Force all scripts to page footer, unless they are explicit about being in the header.'),
  );
  $form['js']['circle_js_onefile'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('<strong>Use with care:</strong> Aggregate all JavaScript into 1 file.'),
    '#default_value' => theme_get_setting('circle_js_onefile'),
    '#description'   => t('This will improve your page load time, but Use with care.'),
  );

  // Breadcrumb settings.
  $form['breadcrumb_settings'] = array(
    '#type'        => 'fieldset',
    '#title'       => '<b> &rarr; </b> ' . t('Breadcrumb Settings'),
    '#collapsible' => TRUE,
    '#collapsed'   => TRUE,
    '#weight'      => -25,
  );
  $form['breadcrumb_settings']['breadcrumb_separator'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Breadcrumb separator'),
    '#default_value' => theme_get_setting('breadcrumb_separator'),
    '#description'   => t('Plain text only. Ex.: »'),
  );
  $form['breadcrumb_settings']['breadcrumb_append_current'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Append the content title to the end of the breadcrumb'),
    '#default_value' => theme_get_setting('breadcrumb_append_current'),
    '#description'   => t('Useful when the breadcrumb is not placed just before the title.'),
  );
  $form['breadcrumb_settings']['breadcrumb_hide_single'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Hide breadcrumb if it only has 1 item'),
    '#default_value' => theme_get_setting('breadcrumb_hide_single'),
    '#description'   => t('Empty breadcrumb wrapper will still be printed.'),
  );

  // Circle Features.
  $form['circle_features'] = array(
    '#type'        => 'fieldset',
    '#title'       => '<b> &rarr; </b> ' . t('Circle theme Features'),
    '#collapsible' => TRUE,
    '#collapsed'   => TRUE,
    '#weight'      => -10,
  );
  $humans_txt_exists = file_exists(DRUPAL_ROOT . '/humans.txt');
  $form['circle_features']['humanstxt'] = array(
    '#type' => 'checkbox',
    '#title' => t('Link to humans.txt'),
    '#description' => $humans_txt_exists ? t('!alert. This checkbox will allow you to link to it from the page source.', array('!alert' => '<strong>' . t('humans.txt was found') . '</strong>')) : t('!alert. Create a humans.txt in the Drupal root (or not..). Read !link for more info.', array('!alert' => '<strong>' . t('humans.txt is missing') . '</strong>', '!link' => '<a href="http://humanstxt.org/" target="_blank">humanstxt.org</a>')),
    '#disabled' => !$humans_txt_exists,
    '#default_value' => $humans_txt_exists && theme_get_setting('humanstxt'),
  );
  $form['circle_features']['circles_enable_less'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Add LESS Support to theme.'),
    '#default_value' => theme_get_setting('circles_enable_less'),
    '#description'   => t('<strong>Use with care:</strong> Do not forget to disable this function on production. Less.js will be added to theme via CDN. To use .less files, in your .info file use: stylesheets-less[][] = name.less'),
  );
  $frameworks = array(
    'ninesixty' => t('960.gs'),
    'bootstrap' => t('Bootstrap'),
    'foundation' => t('Foundation'),
  );
  $form['circle_features']['circle_css_framework'] = array(
    '#type' => 'radios',
    '#title' => t('Choose default CSS framework (for panel styles)'),
    '#default_value' => theme_get_setting('circle_css_framework'),
    '#options' => $frameworks,
  );

  $form['#validate'][] = 'circle_validate_libraries';
}

/**
 * Theme settings validation.
 */
function circle_validate_libraries(&$form, &$form_state) {
  $checks = array();
  $checks['fn_css'] = isset($form_state['values']['circle_css_foundation_local']) ? $form_state['values']['circle_css_foundation_local'] : 0;
  $checks['fn_js'] = isset($form_state['values']['circle_js_foundation_local']) ? $form_state['values']['circle_js_foundation_local'] : 0;
  $checks['fn5_css'] = isset($form_state['values']['circle_css_foundation5_local']) ? $form_state['values']['circle_css_foundation5_local'] : 0;
  $checks['fn5_js'] = isset($form_state['values']['circle_js_foundation5_local']) ? $form_state['values']['circle_js_foundation5_local'] : 0;
  $checks['bs_css'] = isset($form_state['values']['circle_css_bootstrap_local']) ? $form_state['values']['circle_css_bootstrap_local'] : 0;
  $checks['bs_js'] = isset($form_state['values']['circle_js_bootstrap_local']) ? $form_state['values']['circle_js_bootstrap_local'] : 0;
  $checks['modernizer'] = isset($form_state['values']['circle_modernizr_local']) ? $form_state['values']['circle_modernizr_local'] : 0;
  $checks['html_shiv'] = isset($form_state['values']['circle_js_htmlshiv_local']) ? $form_state['values']['circle_js_htmlshiv_local'] : 0;

  // Check if any library was enabled.
  $any_library_checked = FALSE;
  foreach ($checks as $check) {
    if ($check) {
      $any_library_checked = TRUE;
      break;
    }
  }
  $libraries_exists = module_exists('libraries');

  if ($any_library_checked && $libraries_exists) {
    // Modernizr library check.
    if ($checks['modernizer'] && !libraries_get_path('modernizr')) {
      form_set_error('circle_modernizr_local', t('Please download Modernizr and insert it into sites/all/libraries/modernizr first, to use it locally.'));
    }
    // Foundation library check.
    if (($checks['fn_css'] || $checks['fn_js']) && !libraries_get_path('foundation')) {
      form_set_error('circle_css_foundation_local', t('Please download Foundation 4 and insert it into sites/all/libraries/foundation first, to use it locally.'));
    }
    if (($checks['fn5_css'] || $checks['fn5_js']) && !libraries_get_path('foundation5')) {
      form_set_error('circle_css_foundation5_local', t('Please download Foundation 5 and insert it into sites/all/libraries/foundation5 first, to use it locally.'));
    }
    if (($checks['bs_css'] || $checks['bs_js']) && !libraries_get_path('bootstrap')) {
      form_set_error('circle_css_bootstrap_local', t('Please download Bootstrap and insert it into sites/all/libraries/bootstrap first, to use it locally.'));
    }
    if (($checks['modernizer']) && !libraries_get_path('modernizr')) {
      form_set_error('circle_modernizr_local', t('Please download Modernizr and insert it into sites/all/libraries/modernizr first, to use it locally.'));
    }
    if (($checks['html_shiv']) && !libraries_get_path('htmlshiv')) {
      form_set_error('circle_js_htmlshiv_local', t('Please download html5shiv and insert it into sites/all/libraries/htmlshiv first, to use it locally.'));
    }
  }
  elseif ($any_library_checked && !$libraries_exists) {
    form_set_error('', t('Please download the libraries module if you want to include any components locally.'));
  }
}
