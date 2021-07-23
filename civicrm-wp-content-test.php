<?php

/*
Plugin Name: CiviCRM Content test
Plugin URI: https://github.com/phdccltd/civicrm-wp-content-test
GitHub Plugin URI: phdccltd/civicrm-wp-content-test
Description: Test plugin to invoke the_content filter twice which can go wrong in CiviCRM 5.39+
Author: PHDCC
Version: 1.0
Author URI: https://www.phdcc.com/
License: GPL2
*/

// This file must not accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;

add_action('wp', 'civicrm_wp_content_test_basepage_handler', 15, 1); // >10 so executed after CiviCRM

function civicrm_wp_content_test_basepage_handler($wp) {

  add_filter('the_content', 'civicrm_wp_content_test_basepage_render');

  // error_log(' TEST ');
  $excerpt = wp_trim_excerpt();
  // error_log(' XC '.substr($excerpt,0,15).' ');

}

/* function civicrm_wp_content_test_basepage_render($html) {

  error_log(' TEST_RENDER '.substr($html,0,15).' ');

  return $html;

}
*/