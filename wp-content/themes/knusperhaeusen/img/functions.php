<?php
add_theme_support( 'menus' );

function register_theme_menus() {

    register_nav_menus(
        array(
            'primary-menu'  => __( 'Primary Menu', 'knusperhaeusen' ),
            'secondary-menu'  => __( 'Secondary Menu', 'knusperhaeusen' ),
            'tertiary-menu'  => __( 'Tertiary Menu', 'knusperhaeusen' ),
            'mobile-menu'  => __( 'Mobile Menu', 'knusperhaeusen' )
        )
    );

}
add_action( 'init', 'register_theme_menus' );

function wpt_themes_styles()  {

    wp_enqueue_style( 'normalize_css' , get_template_directory_uri() .  '/css/normalize.min.css');
    wp_enqueue_style( 'main_css' , get_template_directory_uri() .  '/style.css');
    wp_enqueue_style( 'orig_css' , get_template_directory_uri() .  '/css/main.css');
    wp_enqueue_style( 'font_css' , get_template_directory_uri() .  '/fonts/fontello-f02d2fa3/css/fontello.css');
    wp_enqueue_style( 'wpt-google-fonts' ,  'https://fonts.googleapis.com/css?family=Quicksand:400,700' , false);

}

add_action( 'wp_enqueue_scripts' , 'wpt_themes_styles');

function wpt_themes_js()  {

wp_enqueue_script( 'toggle_js' , get_template_directory_uri() . '/js/menuToggle.js', array('jquery'), '',true);

wp_enqueue_script( 'main_js' , get_template_directory_uri() . '/js/main.js',  array('jquery'), '',true);

wp_enqueue_script( 'scroll_js' , get_template_directory_uri() . '/js/scroll.min.js',   '', '',true);

}

add_action( 'wp_enqueue_scripts' , 'wpt_themes_js');
?>
