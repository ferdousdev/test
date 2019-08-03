<?php

add_action( 'wp_enqueue_scripts', 'stm_enqueue_parent_styles' );

function stm_enqueue_parent_styles() {

	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('stm-theme-style') );

}

function stm_register_footer_custom_menu() {
  register_nav_menu('footer-menu-ferdous',__( 'Footer Menu Custom' ));
}
add_action( 'init', 'stm_register_footer_custom_menu' );