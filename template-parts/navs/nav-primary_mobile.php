<?php

  wp_nav_menu(
    array(
      'theme_location'  => 'primary_mobile',
      'depth'           => 0,
      'container'       => 'div',
      'container_class' => 'primary_mobile_menu-container',
      'container_id'    => 'primary_mobile_menu-container',
      'menu_class'      => 'nav flex-column',
      'fallback_cb'     => false,
    )
  );


?>