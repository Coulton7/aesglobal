<?php
function aesglobal_form_system_theme_settings_alter(&$form, $form_state) {
  $form['secondary_logo'] = array(
    '#title' => t('Secondary logo'),
    '#description' => t('For a second logo or mobile logo'),
    '#type' => 'managed_file',
    '#upload_location' => 'public://secondary-logo/',
    '#upload_validators' => array(
      'file_validate_extensions' => array('gif png jpg jpeg svg'),
    ),
    '#default_value' => theme_get_setting('secondary_logo'),
  );
}

$form['#submit'][] = 'aesglobal_settings_form_submit';

// Get all themes.
$themes = list_themes();
// Get the current theme
$active_theme = $GLOBALS['theme_key'];
$form_state['build_info']['files'][] = str_replace("/$active_theme.info", '', $themes[$active_theme]->filename) . '/theme-settings.php';

function aesglobal_settings_form_submit(&$form, $form_state) {
$image_fid = $form_state['values']['secondary_logo'];
  $image = file_load($image_fid);
  if (is_object($image)) {
    // Check to make sure that the file is set to be permanent.
    if ($image->status == 0) {
      // Update the status.
      $image->status = FILE_STATUS_PERMANENT;
      // Save the update.
      file_save($image);
      // Add a reference to prevent warnings.
      file_usage_add($image, 'aesglobal', 'theme', 1);
     }
  }
}
