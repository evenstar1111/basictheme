<?php get_header() ?>

<?php get_header(); 

$container_class = '';

if ( is_active_sidebar( 'sidebar-left' ) && is_active_sidebar( 'sidebar-right' ) ):
  $container_class = 'col-lg-6';
elseif ( ( is_active_sidebar( 'sidebar-left' ) && !is_active_sidebar( 'sidebar-right' ) ) 
  || ( !is_active_sidebar( 'sidebar-left' ) && is_active_sidebar( 'sidebar-right' ) ) ):
  $container_class = 'col-lg-9';
else:
  $container_class = 'col-lg-11';
endif

?>

  <div class="container">
    <div class="row justify-content-center">
      <?php get_template_part( 'template-parts/sidebars/sidebar', 'left') ?>
      <div class="<?php echo $container_class ?> posts-container">
        <?php the_content() ?>
      </div>
      <?php get_template_part( 'template-parts/sidebars/sidebar', 'right') ?>
    </div>
  </div>


<?php get_footer(); ?>

<?php get_footer() ?>