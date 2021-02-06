<?php
  wp_nav_menu( 
    array(
      'theme_location'  => 'secondary',
      'depth'           => 1,
      'menu_class'      => 'col-sm-12 footer-social',
      'fallback_cb'     => false,            
    )
  );
?>