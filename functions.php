<?php
/**
 * Saphir Theme Functions
 */

function saphir_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'saphir_setup' );

function saphir_scripts() {
    wp_enqueue_style( 'saphir-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'saphir_scripts' );
