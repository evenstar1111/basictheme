<?php 

if ( !is_active_sidebar( 'sidebar-right' ) ):
  return;
endif;

?>

<div class="col-lg-3 pt-4 pl-3 d-none d-sm-block">
  <div class="sidebar-wrapper">
    <?php if ( is_active_sidebar( 'sidebar-right' ) ): dynamic_sidebar( 'sidebar-right' ); endif ?>  
  </div>
</div>