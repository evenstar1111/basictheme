<?php
  wp_nav_menu(
    array(
      'theme_location'  => 'primary',
      'depth'           => 0,
      'container'       => 'div',
      'container_class' => 'primary_nav-container d-none d-lg-block',
      'container_id'    => '',
      'menu_class'      => 'navbar-nav',
      'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
      'walker'          => new WP_Bootstrap_Navwalker(),
    )
  );
?>