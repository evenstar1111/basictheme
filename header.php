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
<nav id="site-navigation" class="navbar navbar-expand navbar-dark bg-basictheme rounded-0">
<!-- navbar-expand-md-->  
  <?php get_template_part( 'template-parts/header/navbar-brand' ) ?>
  
  <?php get_template_part( 'template-parts/header/navbar-toggler' ) ?>

  <?php get_template_part( 'template-parts/navs/nav', 'primary' ) ?>

  <div class="navbar-right-elements mx-3 d-flex align-items-center">
    <div class="menu-wrapper">
      <?php get_template_part( 'template-parts/navs/nav', 'woocom' ) ?>
    </div>
    <div class="header_nav_widget-wrapper">
      <?php get_template_part( 'template-parts/sidebars/sidebar-top_nav' ) ?>
    </div>
    <div class="wooc_cart-wrapper">
      <?php get_template_part( 'template-parts/sidebars/sidebar-top_nav_cart' ) ?>
    </div>
  </div>
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

<div id="primary_mobile_nav-sidebar" class="primary_mobile_nav-sidebar d-block d-lg-none">
  <?php get_template_part( 'template-parts/navs/nav', 'primary_mobile' ) ?>
</div>

<div class="modal" tabindex="-1" id="wooc_product_search_modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header border-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body pb-5">
        <?php echo do_shortcode('[yith_woocommerce_ajax_search]');?>
      </div>
    </div>
  </div>
</div>