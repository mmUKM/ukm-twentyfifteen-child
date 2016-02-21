<?php
/**
 * @package UKMTheme
 * @subpackage UKM Twenty Fifteen
 * @since 1.0
 */
add_action( 'wp_enqueue_scripts', 'ukmtheme_child_scripts' );
  function ukmtheme_child_scripts() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css', false, '1.0' );
  }