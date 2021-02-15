<?php


if ( ! function_exists('basictheme_enque_styles_n_scripts') ):
   function basictheme_enque_styles_n_scripts() {

       $stylesheet_version          = wp_get_theme()->get( 'Version' );
       $fas_cdn                     = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css';
       $jq_latest_cdn               = 'https://code.jquery.com/jquery-3.5.1.slim.min.js';

       $main_style_dep              = array ( 'latest-styles', 'template-styles', );
       $main_style_wooc_dep         = is_shop() || is_product_category() || is_product_tag() ? array('grid-list-layout', 'grid-list-button',) : array();

       wp_enqueue_style( 
           'basictheme-stylesheet', 
           trailingslashit( get_template_directory_uri() ) . 'style.css', 
           array_merge( 
               $main_style_dep,
               $main_style_wooc_dep
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
           'template-styles', 
           trailingslashit( get_template_directory_uri(  ) ) . 'assets/css/style.css',  
           false, 
           '1.0', 
           'all' 
       ); // styles

       if ( is_shop() || is_product_category() || is_product_tag() ) {
            wp_enqueue_style( 
                'wooc-product-layout', 
                trailingslashit( get_template_directory_uri(  ) ) . 'assets/css/wooc-layout.css',  
                false, 
                '1.0', 
                'all' 
            );
       }
             
        wp_enqueue_style( 
            'wooc-single-product-layout', 
            trailingslashit( get_template_directory_uri(  ) ) . 'assets/css/wooc-single-layout.css',  
            false, 
            '1.0', 
            'all' 
        );

       wp_enqueue_script( 
           'new-bs-script', 
           trailingslashit( get_template_directory_uri(  ) ) . 'assets/js/bootstrap-lat.js',
           array(),
           '4.6',
           true 
       );
     
       wp_enqueue_script( 
           'theme-main-script', 
           trailingslashit( get_template_directory_uri(  ) ) . 'assets/js/main.js',
           array(  ),
           '1.0',
           true 
       );
       
   }
endif;

add_action('wp_enqueue_scripts', 'basictheme_enque_styles_n_scripts');

?>