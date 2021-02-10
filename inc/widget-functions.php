<?php 


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
       'before_widget' => '<div id="%1$s" class="widget %2$s">',
       'after_widget'  => '</div>',
       'before_title'  => '<h3 class="header-widget-title">',
       'after_title'   => '</h3>',
   ) );
   register_sidebar( array(
       'id'            => 'top-nav-widget-cart',
       'name'          => __( 'Header Nav Menu Widget for Cart', 'basictheme' ),
       'description'   => __( 'Top nav menu widget section' ),
       'before_widget' => '<div id="%1$s" class="widget %2$s">',
       'after_widget'  => '</div>',
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

?>