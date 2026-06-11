<?php
function sign_of_the_dove_setup() {
    add_theme_support( 'editor-styles' );
    add_editor_style( 'assets/css/compiled-styles.css' );
    add_theme_support( 'wp-block-styles' );
}
add_action( 'after_setup_theme', 'sign_of_the_dove_setup' );

function sign_of_the_dove_enqueue_assets() {
    wp_enqueue_style( 
        'sign-of-the-dove-main', 
        get_template_directory_uri() . '/assets/css/compiled-styles.css', 
        array(), 
        '1.0.0' 
    );
}
add_action( 'wp_enqueue_scripts', 'sign_of_the_dove_enqueue_assets' );