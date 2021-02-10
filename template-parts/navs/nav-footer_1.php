<?php
  wp_nav_menu(
    array(
      'theme_location'  => 'footer_nav_menu_1',
      'depth'           => 0,
      'container'       => 'div',
      'container_class' => 'primary_nav-container d-none d-lg-block',
      'container_id'    => 'footer_nav_1',
      'menu_class'      => 'footer-nav',
      'fallback_cb'     => false,
    )
  );
?>