<?php

function tasksat_scripts() {
    wp_enqueue_style('reset-css', get_template_directory_uri() . '/res/css/reset-css-style.css');
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('owl-carousel-min-css', get_template_directory_uri() . '/res/libs/owlCarousel2/assets/owl.carousel.min.css');
    wp_enqueue_style('owl-carousel-default-min-css', get_template_directory_uri() . '/res/libs/owlCarousel2/assets/owl.theme.default.min.css');

    wp_enqueue_style('smallscreen', get_template_directory_uri() . '/res/css/smallscreen.css');

    wp_enqueue_script( 'owl-carousel-script', get_template_directory_uri() . '/res/libs/owlCarousel2/owl.carousel.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/res/js/main.js', array('jquery', 'owl-carousel-script'), '', true );


}
add_theme_support('menus');
add_theme_support('nav-menus'); if ( function_exists('register_nav_menus')) { register_nav_menus( array( 'main' => 'Main Nav' ) ); }
add_action( 'wp_enqueue_scripts', 'tasksat_scripts' );