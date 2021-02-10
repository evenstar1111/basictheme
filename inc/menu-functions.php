<?php

function basictheme_register_menus() {
   register_nav_menus( array(
       'primary'           => __( 'Primary Menu', 'basictheme' ),
       'wc_endpoints_menu' => __( 'Top Navbar Menu for WooCom Endpoints', 'basictheme'),
       'secondary'         => __( 'Secondary Menu', 'basictheme'),
       'primary_mobile'    => __( 'Primary Menu - Mobile Devices', 'basictheme' ),
       'footer_nav_menu_1' => __( 'Footer navigation menu one', 'basictheme' ),
   ) );
}

add_action( 'init', 'basictheme_register_menus' );


// adding bootstrap nav walker
function register_navwalker(){
   require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

add_action( 'after_setup_theme', 'register_navwalker' );

?>