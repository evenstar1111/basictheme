<?php

// WooCommerce
function enable_woo_commerce_support() {
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'enable_woo_commerce_support' );



// Theme Setup
require get_template_directory() . '/inc/theme-setup-functions.php';


// registering navigation menus
require get_template_directory() . '/inc/menu-functions.php';


// Registering sidebars / widget areas
require get_template_directory() . '/inc/widget-functions.php';


/* Enqueueing stylesheets and javascript */
require get_template_directory() . '/inc/enqueue-functions.php';


// code for Woocs and sidebars in menus
require get_template_directory() . '/inc/sidebar-in-menus.php';

// shortcodes for these theme
require get_template_directory() . '/inc/shortcode-functions.php';


//  fetching data from database
function basictheme_copyright() {
    global $wpdb;
    $copyright_dates = $wpdb->get_results("
        SELECT
        YEAR(min(post_date_gmt)) AS firstdate,
        YEAR(max(post_date_gmt)) AS lastdate
        FROM
        $wpdb->posts
        WHERE
        post_status = 'publish'
    ");
    $output = '';
    if($copyright_dates) {
        $copyright = "&copy; " . $copyright_dates[0]->firstdate;
        if($copyright_dates[0]->firstdate != $copyright_dates[0]->lastdate) {
            $copyright .= '-' . $copyright_dates[0]->lastdate;
        }
        $output = $copyright;
    }
    return $output;
}




//overriding woocommerce default hooks
// for breadcrumb
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
add_action( 'custom_wc_breadcrumb_hook', 'woocommerce_breadcrumb' );

//result count
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
add_action( 'custom_wc_result_count_hook', 'woocommerce_result_count');

// addiding quantity field in woocommerce single product template
require get_template_directory() . '/inc/woocommerce-quantity-field.php';



// functions for custom post type
require get_template_directory() . '/inc/cptui-functions.php';