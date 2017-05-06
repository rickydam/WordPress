<?php
/**
 * @package Ricky
 * @version 1.0
 */

/*
Plugin Name: Ricky
Plugin URI:
Description: This plugin will find instances of the word "WordPress" and replace it with "RICKY".
Author: Ricky Dam
Version: 1.0
Author URI: http://rickydam.com
*/

function replaceword_WordPress() {
  $ricky_wp_post = get_the_content();
  $theContent = str_replace('WordPress', 'RICKY', $ricky_wp_post);
  return $theContent;
}
add_filter('the_content', 'replaceword_WordPress');
?>
