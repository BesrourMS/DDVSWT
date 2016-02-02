<?php

function load_css() {
	wp_enqueue_style( 'ddvswt_stylesheet', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'load_css' );

add_theme_support( 'post-thumbnails' ); 
add_theme_support( 'title-tag' );
?>