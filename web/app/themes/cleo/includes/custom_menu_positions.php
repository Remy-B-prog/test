<?php

/* Ajout des emplacements de menu du thème */
function custom_menu_positions() {

    register_nav_menus(
        array(
            'menu_header' => __( 'Menu header' ),
            'menu_footer' => __( 'Menu Footer' ),
            'menu_footer_account' => __( 'Menu Footer Account' ),
        )
    );

}
add_action( 'init', 'custom_menu_positions' );