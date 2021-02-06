<?php
  wp_nav_menu(
    array(
      'theme_location'  => 'primary',
      'depth'           => 0,
      'container'       => 'div',
      'container_class' => 'collapse navbar-collapse',
      'container_id'    => 'primary-navigation-collapse',
      'menu_class'      => 'navbar-nav',
      // 'items_wrap'      => 'ol',
      'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
      'walker'          => new WP_Bootstrap_Navwalker(),
    )
  );
?>