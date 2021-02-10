<?php 

if ( !has_nav_menu( 'wc_endpoints_menu' ))
return 

?>


<?php

wp_nav_menu(
   array(
     'theme_location'  => 'wc_endpoints_menu',
     'depth'           => 0,
     'menu_class'      => 'navbar-nav',
     'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
     'walker'          => new WP_Bootstrap_Navwalker(),
   )
 );

?>