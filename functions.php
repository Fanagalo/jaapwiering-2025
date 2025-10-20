<?php
/**
 * Enqueue style.css to directly add custom CSS code
 */

function fngllw_enqueue_styles() {
    wp_enqueue_style('additional-style', get_stylesheet_uri(), [], wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'fngllw_enqueue_styles');


/**
 * Enqueue theme styles and fonts to make fonts available globally on the frontend
 */
function fngllw_enqueue_local_fonts() {
    wp_enqueue_style('local-fonts', get_template_directory_uri() . '/assets/css/fonts.css', array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'fngllw_enqueue_local_fonts' );


/**
 * Dark mode enqueue style and script
 */

function fngllw_enqueue_lightdarkmode() {
    wp_enqueue_style('lightmode-style', get_template_directory_uri() . '/assets/css/lightmode.css', array(), null);
    wp_enqueue_style('darkmode-style', get_template_directory_uri() . '/assets/css/darkmode.css', array(), null);
    wp_enqueue_script('lightdarkmode-toggle', get_template_directory_uri() . '/assets/js/lightdarkmode-toggle.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'fngllw_enqueue_lightdarkmode');