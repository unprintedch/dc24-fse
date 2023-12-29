<?php
/**
 * Enqueue theme assets.
 */
function dc24_enqueue_scripts() {
	$theme = wp_get_theme();
	wp_enqueue_style( 'dc24-styles', get_stylesheet_directory_uri().'/dist/output.css', array(), $theme->get( 'Version' ) );
	//wp_enqueue_script( 'dc24', get_stylesheet_directory_uri().'/js/app.js' , array(), $theme->get( 'Version' ) );
}

add_action( 'wp_enqueue_scripts', 'dc24_enqueue_scripts' );