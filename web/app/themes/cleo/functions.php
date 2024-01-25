<?php

/* Thème functions */

require "includes/custom_theme_supports.php";
require "includes/custom_menu_positions.php";
require "includes/custom_enqueue_css_js.php";
require "includes/custom_disable_comments.php";

/* fonctionnalité du theme */


function custom_yoast_breadcrumb()
{

    if (function_exists('yoast_breadcrumb') && !is_front_page()) {
        yoast_breadcrumb('<div id="breadcrumbs" class="h5 pb-2">', '</div>', true);
    }
}
add_filter('show_admin_bar', '__return_false');

add_action('custom_yoast_breadcrumb', 'custom_yoast_breadcrumb');




?>