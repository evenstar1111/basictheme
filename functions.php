<?php


function enable_woo_commerce_support() {
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'enable_woo_commerce_support' );

require get_template_directory() . '/inc/theme-setup-functions.php';

require get_template_directory() . '/inc/menu-functions.php';

require get_template_directory() . '/inc/widget-functions.php';

require get_template_directory() . '/inc/enqueue-functions.php';

require get_template_directory() . '/inc/sidebar-in-menus.php';

require get_template_directory() . '/inc/shortcode-functions.php';

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

require get_template_directory() . '/inc/woocommerce-quantity-field.php';


remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 30 );