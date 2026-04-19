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
    wp_enqueue_script( 'saphir-ux', get_template_directory_uri() . '/inc/js/ux-interactions.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'saphir_scripts' );

// Register Elementor Widgets
function register_saphir_widgets( $widgets_manager ) {
    if ( ! did_action( 'elementor/loaded' ) ) {
        return;
    }
    require_once( __DIR__ . '/inc/widgets/booking-bar.php' );
    $widgets_manager->register( new \Saphir_Booking_Bar_Widget() );
}
add_action( 'elementor/widgets/register', 'register_saphir_widgets' );
