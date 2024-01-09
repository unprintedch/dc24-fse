<?php
/**
 * Enqueue theme assets.
 */
function dc24_enqueue_scripts() {
	$theme = wp_get_theme();
	wp_enqueue_style( 'dc24-styles', get_stylesheet_directory_uri().'/dist/output.css', array(), $theme->get( 'Version' ) );
	wp_enqueue_script( 'dc24-scripts', get_stylesheet_directory_uri().'/dist/app.js' , array("swiper-js"), $theme->get( 'Version' ) );
	//wp_enqueue_script( 'dc24-style-swiper', get_stylesheet_directory_uri().'/dist/app.css' , array(), $theme->get( 'Version' ) );
	// Enqueue Swiper CSS
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');

    // Enqueue Swiper JS
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);
}

add_action( 'wp_enqueue_scripts', 'dc24_enqueue_scripts' );