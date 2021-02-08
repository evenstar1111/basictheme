<?php
  wp_nav_menu(
    array(
      'theme_location'  => 'primary',
      'depth'           => 0,
      'container'       => 'div',
      'container_class' => 'collapse navbar-collapse d-md-flex justify-content-md-end',
      'container_id'    => 'primary-navigation-collapse',
      'menu_class'      => 'navbar-nav',
      'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
      'walker'          => new WP_Bootstrap_Navwalker(),
    )
  );
?>