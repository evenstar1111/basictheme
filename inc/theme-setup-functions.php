<?php

if ( ! function_exists( 'basictheme_set_up' ) ) :

function basictheme_set_up() {
    load_theme_textdomain( 'basictheme', get_template_directory() . '/languages' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    
    add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );

    /* 
    Adding support for html5 markup
    */
    add_theme_support(
        'html5',
        array(
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
            'navigation-widgets',
        )
    );

    // registering custom header image & setting up default header
    // images
    $custom_header_config = array(
        'default-image'      => get_template_directory_uri() . '/assets/img/Macbook.png',
        'default-text-color' => '000',
        'width'              => 1200,
        'height'             => 500,
        'uploads'            => true,
        'flex-width'         => true,
        'flex-height'        => true,
    );
    add_theme_support( 'custom-header', $custom_header_config );

    // registering custom logo
    $custom_logo_config = array(
        'height'      => 60,
        'width'       => 60,
        'flex-height' => false, // do it to apply fixed image size /
        'flex-width'  => false, // to get images of your set size.
        'header-text' => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
    add_theme_support( 'custom-logo', $custom_logo_config );

}
endif; 
add_action( 'after_setup_theme', 'basictheme_set_up' );


?>