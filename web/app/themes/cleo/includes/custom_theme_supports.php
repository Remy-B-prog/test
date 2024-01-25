<?php

/* Ajout des supports du thème */
function custom_after_setup_theme() {

    add_theme_support( 'custom-logo' );
    add_theme_support( 'menus' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );

}

add_action( 'after_setup_theme', 'custom_after_setup_theme' );

?> 
