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
	
	drupal_add_js(drupal_get_path('theme', 'aesbs337').'/js/logoscroll.js');
	drupal_add_js(drupal_get_path('theme', 'aesbs337').'/js/fade-text.js');
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

function aesglobal_preprocess_node(&$variables) {
  $node = $variables['node'];
  $date = format_date($node->created, 'custom', 'F j, Y');
  $variables['submitted'] = t('Submitted by !username on !datetime', array('!username' => $variables['name'], '!datetime' => $date));
}