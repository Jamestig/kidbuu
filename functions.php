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

		wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'child-style',
				get_stylesheet_directory_uri() . '/style.css',
				array( $parent_style ),
				'1.0'
		);
}
