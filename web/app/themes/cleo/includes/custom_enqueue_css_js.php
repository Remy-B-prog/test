<?php

/**
 ** activation theme
 **/
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

/* Ajout des fichiers js et css au thème */
function custom_enqueue_scripts()
{


    wp_register_script('app', get_template_directory_uri() . '/assets/js/app.js', array(), '1.0', true);
    wp_enqueue_script('app');

    wp_enqueue_script('jquery', '//code.jquery.com/jquery-1.11.0.min.js', array(), '1.0', true);
    wp_enqueue_script('jquery-migrate', '//code.jquery.com/jquery-migrate-1.2.1.min.js', array(), '1.0', true);


    wp_enqueue_script('jquery', '//code.jquery.com/jquery-1.11.0.min.js', array(), '', true);


    wp_enqueue_style('slick-slider', get_template_directory_uri() . '/assets/libs/slickslider/slick/slick.css');
    wp_enqueue_script('slick-slider', get_template_directory_uri() . '/assets/libs/slickslider/slick/slick.min.js', array(), '', true);
}
add_action('wp_enqueue_scripts', 'custom_enqueue_scripts');
