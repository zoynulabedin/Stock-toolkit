<?php

function theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'avada-stylesheet' ) );
    wp_enqueue_style( 'caruosel', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.css', array( 'avada-stylesheet' ) );
    wp_enqueue_script( 'caruosel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '20151215', true );
    wp_enqueue_script( 'cus', get_template_directory_uri() . '/assets/js/cust.js', array('jquery'), '20151215', true );

}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function avada_lang_setup() {
	$lang = get_stylesheet_directory() . '/languages';
	load_child_theme_textdomain( 'Avada', $lang );
}
add_action( 'after_setup_theme', 'avada_lang_setup' );