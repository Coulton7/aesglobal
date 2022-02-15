<?php
/**
 * @file
 * The primary PHP file for this theme.
 */
function aesglobal_preprocess_page(&$vars) {
    // template files called page--contenttype.tpl.php
    if (isset($vars['node']->type)) {
        $vars['theme_hook_suggestions'][] = 'page__' . $vars['node']->type;
    }

    if (arg(0) == 'taxonomy' && arg(1) == 'term' ) {
      $term = taxonomy_term_load(arg(2));
      $vocabulary = taxonomy_vocabulary_load($term->vid);
      $vars['theme_hook_suggestions'][] = 'page__taxonomy_vocabulary_' . $vocabulary->machine_name;
    }

    $term = menu_get_object('taxonomy_term', 2);
    if ($term) {
      $field_types_image = field_get_items('taxonomy_term', $term, 'field_types_image');
      $field_industry_image = field_get_items('taxonomy_term', $term, 'field_industry_image');
      if ($field_types_image) {
        $vars['field_types_image'] = field_view_value('taxonomy_term', $term, 'field_types_image', $field_types_image[0]);
      }
      else if($field_industry_image) {
        $vars['field_industry_image'] = field_view_value('taxonomy_term', $term, 'field_industry_image', $field_industry_image[0]);
      }
    }

	drupal_add_js(drupal_get_path('theme', 'aesbs337').'/js/logoscroll.js');
  drupal_add_js(drupal_get_path('theme', 'aesbs337').'/js/smooth-scroll.js');
	drupal_add_js(drupal_get_path('theme', 'aesbs337').'/js/fade-text.js');
  drupal_add_js(drupal_get_path('theme', 'aesbs337').'/js/contact-icon.js');
  drupal_add_js(drupal_get_path('theme', 'aesbs337').'/js/nav-btn.js');
  drupal_add_js(drupal_get_path('theme', 'aesbs337').'/js/reg-mark.js');
  drupal_add_js(drupal_get_path('theme', 'aesbs337').'/js/prod-enq-bg-img.js');
  drupal_add_js(drupal_get_path('theme', 'aesbs337').'/js/menu-collapse.js');
}

function aesglobal_css_alter(&$css){
  $css['sites/all/themes/aesglobal/bootstrap/css/bootstrap.min.css']['weight']=11;
  $css['sites/all/themes/aesglobal/bootstrap/css/bootstrap-theme.min.css']['weight']=12;
  $css['sites/all/themes/aesbs337/css/fonts-style.css']['weight']=13;
  $css['sites/all/themes/aesbs337/css/regions-style.css']['weight']=14;
  $css['sites/all/themes/aesbs337/css/block-style.css']['weight']=15;
  $css['sites/all/themes/aesbs337/css/field-style.css']['weight']=16;
  $css['sites/all/themes/aesbs337/css/jquery.scrolling-tabs.min.css']['weight']=17;
  $css['sites/all/themes/aesglobal/css/global-style.css']['weight']=18;
}

function aesglobal_theme(){
	$items=array();

	$items['user_login']=array(
	'render element' => 'form',
	'path'=> drupal_get_path('theme', 'aesbs337').'/templates',
	'template'=>'user_login',
	'preprocess functions'=>array(
	'aesbs337_preprocess_user_login'
	),
	);
	return $items;
}

function aesglobal_form_alter(&$form, &$form_state, &$form_id){
  if($form_id = 'qs') {
    $form['qs']['#attributes']['placeholder'] = t('Enter your keywords');
  }
  if($form_id = 'qs') {
    $form['qs']['#attributes']['placeholder'] = t('Enter your keywords');
  }
}

function aesglobal_preprocess_node(&$variables) {
  $node = $variables['node'];
  $date = format_date($node->created, 'custom', 'F j, Y');
  $variables['submitted'] = t('Submitted by !username on !datetime', array('!username' => $variables['name'], '!datetime' => $date));

  // Get a list of all the regions for this theme
  foreach (system_region_list($GLOBALS['theme']) as $region_key => $region_name) {
    // Get the content for each region and add it to the $region variable
    if ($blocks = block_get_blocks_by_region($region_key)) {
      $variables['region'][$region_key] = $blocks;
    }
    else {
      $variables['region'][$region_key] = array();
    }
  }
}

function aesglobal_preprocess_maintenance_page(&$variables) {
  if (isset($variables['db_is_active']) && !$variables['db_is_active']) {
// Template suggestion for offline site
    $variables['theme_hook_suggestion'] = 'maintenance_page__offline';
  }
else {
// Template suggestion for live site (in maintenance mode)
    $variables['theme_hook_suggestion'] = 'maintenance_page';
 }
}
