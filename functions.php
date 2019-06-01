<?php
/**
 * Kid Buu functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Kid_Buu
 * @since 1.0.0
 */

add_action( 'wp_enqueue_scripts', 'kidbuu_theme_enqueue_styles' );
/**
 * Enqueue parent and child styles
 */
function kidbuu_theme_enqueue_styles() {

	$parent_style = 'parent-style'; // This is 'twentynineteen-style' for the Twenty Nineteen theme.

	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css', [], wp_get_theme( 'version' ), 'all' );
	wp_enqueue_style(
		'child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style ),
		'1.0'
	);
	wp_enqueue_style( 'prata-font', 'https://fonts.googleapis.com/css?family=Prata&display=swap', [], '1.0', 'all' );
}

// Register right nav menu.
register_nav_menus(
	array(
		'menu-1' => __( 'Left Menu', 'kidbuu' ),
		'menu-2' => __( 'Right Menu', 'kidbuu' ),
	)
);
