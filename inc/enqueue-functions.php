<?php


if ( ! function_exists('basictheme_enque_styles_n_scripts') ):
   function basictheme_enque_styles_n_scripts() {

       $stylesheet_version  = wp_get_theme()->get( 'Version' );
       $fas_cdn             = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css';
       $jq_latest_cdn       = 'https://code.jquery.com/jquery-3.5.1.slim.min.js';

       wp_enqueue_style( 
           'basictheme-stylesheet', 
           trailingslashit( get_template_directory_uri(  ) ) . 'style.css', 
           array( 
               'latest-styles',
               //'bootstrap-styles', 
               'fas-icons', 
               'template-styles', 
               //'animate-styles' 
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
       // wp_enqueue_style( 
       //     'bootstrap-styles', 
       //     trailingslashit( get_template_directory_uri(  ) ) . 'assets/css/bootstrap.css', 
       //     false, 
       //     '3.3.6', 
       //     'all' 
       // );
       wp_enqueue_style( 
           'fas-icons', 
           $fas_cdn,  
           false, 
           '5.15.2', 
           'all' 
       );
       // wp_enqueue_style( 
       //     'animate-styles', 
       //     trailingslashit( get_template_directory_uri(  ) ) . 'assets/css/animate.css',  
       //     false, 
       //     '4.5.0', 
       //     'all' 
       // );
       wp_enqueue_style( 
           'template-styles', 
           trailingslashit( get_template_directory_uri(  ) ) . 'assets/css/style.css',  
           false, 
           '1.0', 
           'all' 
       ); // styles


    //    wp_enqueue_script( 
    //         'jquery-latest-cdn', 
    //         $jq_latest_cdn,
    //         array(),
    //         '3.5',
    //         false
    //     );

    //    wp_enqueue_script( 
    //        'wow-script', 
    //        trailingslashit( get_template_directory_uri(  ) ) . 'assets/js/wow.js',
    //        array( 
    //            'jq-new',
    //            //'jquery-script', 
    //           'new-bs-script',
    //            //'bootstrap-script' 
    //        ),
    //        false,
    //        true 
    //    ); 
       
    //    wp_enqueue_script( 
    //        'jq-new', 
    //        trailingslashit( get_template_directory_uri(  ) ) . 'assets/js/jquery-lat.js',
    //        array(),
    //        '3',
    //        true 
    //    );
       wp_enqueue_script( 
           'new-bs-script', 
           trailingslashit( get_template_directory_uri(  ) ) . 'assets/js/bootstrap-lat.js',
           array(),
           '4.6',
           true 
       );
       // wp_enqueue_script( 
       //     'bootstrap-script', 
       //     trailingslashit( get_template_directory_uri(  ) ) . 'assets/js/bootstrap.js',
       //     array( 'jquery-script' ),
       //     '3.3.6',
       //     true 
       // );
       // wp_enqueue_script( 
       //     'jquery-script', 
       //     trailingslashit( get_template_directory_uri(  ) ) . 'assets/js/jquery.js',
       //     '',
       //     '2.1.4',
       //     true 
       // );
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