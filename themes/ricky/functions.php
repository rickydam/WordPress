<?php
  function addStyle() {
    wp_enqueue_style('style', get_stylesheet_uri());
  }
  add_action('wp_enqueue_scripts', 'addStyle');


  function addMenu($value='')
  {
    register_nav_menus( array(
  		'nav'    => __( 'Nav Menu', 'ricky' ),
  	) );
  }
  add_action( 'after_setup_theme', 'addMenu' );
?>
