<?
function aesglobal_settings($settings){
  file_check_directory(file_directory_path(), FILE_CRREATE_DIRECTORY, 'file_directory_path');

  if ($file = file_save_upload('secondary_logo',
  array('file_validate_is_image' => array()))) {
    $parts = pathinfo($file->filename);
    $filename = 'aesglobal_secondary_logo.' . $parts['extension'];
    if (file_copy($file, $filename, FILE_EXISTS_REPLACE)){
      $settings['secondary_logo_path'] = $file->filepath;
    }
  }

  $form = array();
  $form['secondary_logo'] = array(
    '#type' => 'file',
    '#title' => t('Secondary Logo'),
    '#maxlength' => 40,
  );
  $form['secondary_logo_path'] = array(
    '#type' => 'value',
    '#value' => !empty($settings['secondary_logo_path']) ? $settings['secondary_logo_path'] : '',
  );
  if(!empty($settings['secondary_logo_path'])){
    $form['secondary_logo_preview'] = array(
      '#type' => 'markeup',
      '#value' => !empty($settings['secondary_logo_path']) ? theme('image', $settings['secondary_logo_path']) : '' ,
    );
  }
  return $form;
}
