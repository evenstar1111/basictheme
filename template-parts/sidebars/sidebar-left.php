<?php 

if ( !is_active_sidebar( 'sidebar-left' ) ):
  return;
endif;

?>

<div class="col-lg-3 pt-4 pr-3 d-none d-sm-block">
  <div class="sidebar-wrapper">
    <?php if ( is_active_sidebar( 'sidebar-left' ) ): dynamic_sidebar( 'sidebar-left' ); endif ?>
  </div>
</div>