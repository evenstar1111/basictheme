<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="description" content="<?php bloginfo( 'description' ) ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php wp_body_open(); ?>
<div id="page" class="site">
<header id="masthead" class="site-header">
<nav id="site-navigation" class="navbar navbar-expand-md navbar-dark bg-dark rounded-0">

  <?php 
    if ( function_exists( 'the_custom_logo' ) ) :     
      $custom_logo_id = get_theme_mod( 'custom_logo' );
      $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );        
      if ( has_custom_logo() ) : 
  ?>

        <a class="navbar-brand mr-auto" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img class="rounded" src="<?php echo esc_url( $logo[0] ) ?>" width="<?php echo absint( $logo[1] ) ?>" height="<?php echo absint( $logo[2] ) ?>" alt="<?php echo get_bloginfo( 'name', 'display' ) ?>">
          <h1 class="m-0 p-0 text-white"><?php echo  get_template_part( 'template-parts/site_title' ) ?></h1>
        </a>

      <?php else: ?>
        <a class="navbar-brand mr-auto" href="<?php echo esc_url( home_url( '/' ) ); ?>">          
          <h1 class="m-0 p-0 text-white"><?php echo get_template_part( 'template-parts/site_title' ) ?></h1>
        </a>

  <?php
      endif;
    endif;
  ?>
      <?php if ( has_nav_menu( 'primary' ) ): ?>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#primary-navigation-collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <?php endif ?>
      <?php get_template_part( 'template-parts/navs/nav', 'primary' ) ?>
</nav>

<?php if ( get_header_image() ) : ?>
  <?php if ( is_front_page() ) : ?>
    <div class="site-header-image">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <img class="w-100" src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php esc_attr_e( get_bloginfo( 'name', 'display' ) ); ?>">
        </a>
    </div>
  <?php endif; ?>
<?php endif; ?>
</header>


