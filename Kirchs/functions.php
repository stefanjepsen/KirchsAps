<?php 

function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');

//Nav menu's 

register_nav_menus( array (
    'primary' => __( 'Primary Menu' ),
    'footer' => __( 'Footer Menu' ),

));


