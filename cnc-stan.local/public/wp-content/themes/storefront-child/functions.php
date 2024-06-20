<?php
/**
 * Storefront Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Storefront
 */

add_action( 'wp_enqueue_scripts', 'Storefront_child_parent_theme_enqueue_styles' );

/**
 * Enqueue scripts and styles.
 */
function Storefront_child_parent_theme_enqueue_styles() {
        wp_enqueue_style( 'Storefront-style', get_template_directory_uri() . '/style.css');
        wp_enqueue_style( 'Storefront-child-style',
                                                         get_stylesheet_directory_uri() . '/style.css',
                                                         [ 'Storefront-style' ]
       );
	
	
}

тут какой то код я поменял