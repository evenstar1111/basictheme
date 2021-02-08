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




// registering navigation menus
function basictheme_register_menus() {
   register_nav_menus( array(
       'primary'      => __( 'Primary Menu', 'basictheme' ),
       'secondary'    => __( 'Secondary Menu', 'basictheme')
   ) );
}
add_action( 'init', 'basictheme_register_menus' );


// Registering sidebars / widget areas
function basictheme_register_sidebars() {    
    register_sidebar( array(
        'id'            => 'sidebar-left',
        'name'          => __( 'Left Sidebar', 'basictheme' ),
        'description'   => __( 'left sidebar area of the page' ),
        'before_widget' => '<aside id="%1$s" class="widget mb-4 %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'id'            => 'sidebar-right',
        'name'          => __( 'Right Sidebar', 'basictheme' ),
        'description'   => __( 'right sidebar area of the page' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'id'            => 'top-nav-widget',
        'name'          => __( 'Header Nav Menu Widget', 'basictheme' ),
        'description'   => __( 'Top nav menu widget section' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s nav-item">',
        'after_widget'  => '</li>',
        'before_title'  => '<h3 class="header-widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'id'            => 'footer-1',
        'name'          => __( 'Footer One', 'basictheme' ),
        'description'   => __( 'this is footer section widget area' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="footer-widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'id'            => 'footer-2',
        'name'          => __( 'Footer Two', 'basictheme' ),
        'description'   => __( 'this is footer section widget area' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="footer-widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'id'            => 'footer-3',
        'name'          => __( 'Footer Three', 'basictheme' ),
        'description'   => __( 'this is footer section widget area' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="footer-widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'id'            => 'footer-4',
        'name'          => __( 'Footer Four', 'basictheme' ),
        'description'   => __( 'this is footer section widget area' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="footer-widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'id'                => 'footer-area',
        'name'              => __( 'Footer Widget One', 'basictheme' ),
        'description'       => __( 'footer widget area' ),
        'before_widget'     => '<li id="%1$s" class="widget mb-4 %2$s">',
        'after_widget'      => '</li>',
    ) );
}
add_action( 'widgets_init', 'basictheme_register_sidebars' );


// adding bootstrap nav walker
function register_navwalker(){
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

add_action( 'after_setup_theme', 'register_navwalker' );


/* Enqueueing stylesheets and javascript */
if ( ! function_exists('basictheme_enque_styles_n_scripts') ):
    function basictheme_enque_styles_n_scripts() {

        $stylesheet_version = wp_get_theme()->get( 'Version' );

        wp_enqueue_style( 
            'basictheme-stylesheet', 
            trailingslashit( get_template_directory_uri(  ) ) . 'style.css', 
            array( 
                'latest-styles',
                'bootstrap-styles', 
                'fas-icons', 
                'template-styles', 
                'animate-styles' 
            ), 
            $stylesheet_version,
            'all' 
        );

        wp_enqueue_style( 
            'latest-styles', 
            trailingslashit( get_template_directory_uri(  ) ) . 'assets/css/bootstrap-lat.css', 
            false, 
            '4.6', 
            'all' 
        );
        wp_enqueue_style( 
            'bootstrap-styles', 
            trailingslashit( get_template_directory_uri(  ) ) . 'assets/css/bootstrap.css', 
            false, 
            '3.3.6', 
            'all' 
        );
        wp_enqueue_style( 
            'fas-icons', 
            trailingslashit( get_template_directory_uri(  ) ) . 'assets/css/font-awesome.css',  
            false, 
            '4.5.0', 
            'all' 
        );
        wp_enqueue_style( 
            'animate-styles', 
            trailingslashit( get_template_directory_uri(  ) ) . 'assets/css/animate.css',  
            false, 
            '4.5.0', 
            'all' 
        );
        wp_enqueue_style( 
            'template-styles', 
            trailingslashit( get_template_directory_uri(  ) ) . 'assets/css/style.css',  
            false, 
            '1.0', 
            'all' 
        ); // styles

        wp_enqueue_script( 
            'wow-script', 
            trailingslashit( get_template_directory_uri(  ) ) . 'assets/js/wow.js',
            array( 
                'jq-new',
                'jquery-script', 
                'new-bs-script',
                'bootstrap-script' 
            ),
            false,
            true 
        ); 
        wp_enqueue_script( 
            'jq-new', 
            trailingslashit( get_template_directory_uri(  ) ) . 'assets/js/jquery-lat.js',
            array(),
            '3',
            true 
        );
        wp_enqueue_script( 
            'new-bs-script', 
            trailingslashit( get_template_directory_uri(  ) ) . 'assets/js/bootstrap-lat.js',
            array(),
            '4.6',
            true 
        );
        wp_enqueue_script( 
            'bootstrap-script', 
            trailingslashit( get_template_directory_uri(  ) ) . 'assets/js/bootstrap.js',
            array( 'jquery-script' ),
            '3.3.6',
            true 
        );
        wp_enqueue_script( 
            'jquery-script', 
            trailingslashit( get_template_directory_uri(  ) ) . 'assets/js/jquery.js',
            '',
            '2.1.4',
            true 
        );
        
    }
endif;

add_action('wp_enqueue_scripts', 'basictheme_enque_styles_n_scripts');


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



// codes added afterwards should be shipped to a plugin instead.
//

// CPT UI adding to WP categories and tags
function my_cptui_add_post_types_to_archives( $query ) {
	if ( is_admin() || ! $query->is_main_query() ) {
		return;    
	}

	if ( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
		$cptui_post_types = cptui_get_post_type_slugs();

		$query->set(
			'post_type',
			array_merge(
				array( 'post' ),
				$cptui_post_types
			)
		);
	}
}
add_filter( 'pre_get_posts', 'my_cptui_add_post_types_to_archives' );

// changing posts per page
function my_cptui_change_posts_per_page( $query ) {
    if ( is_admin() || ! $query->is_main_query() ) {
       return;
    }

    if ( is_post_type_archive( 'product' ) ) {
       $query->set( 'posts_per_page', 6 );
    }
}
add_filter( 'pre_get_posts', 'my_cptui_change_posts_per_page' );

// ensuring search functionality for custom post types
function my_cptui_add_post_type_to_search( $query ) {
	if ( is_admin() ) {
		return;
	}

	if ( $query->is_search() ) {
		$cptui_post_types = cptui_get_post_type_slugs();
		$query->set(
			'post_type',
			array_merge(
				array( 'post' ), 
				$cptui_post_types
			)
		);
	}
}
add_filter( 'pre_get_posts', 'my_cptui_add_post_type_to_search' );

// adding cptui post types to the RSS feeds
function my_cptui_add_post_types_to_rss( $query ) {
	if ( ! $query->is_feed() ) {
		return;    
	}

	$cptui_post_types = cptui_get_post_type_slugs();

	$query->set(
		'post_type',
		array_merge(
			array( 'post' ),
			$cptui_post_types
		)
	);
}
add_filter( 'pre_get_posts', 'my_cptui_add_post_types_to_rss' );


//custom function to get the description of custom post type
function my_cptui_post_type_description( $post_type_slug = '' ) {
	$mytype = get_post_type_object( $post_type_slug );
	if ( ! empty( $mytype ) ) {
		echo $the_post_type->description;
	}
}