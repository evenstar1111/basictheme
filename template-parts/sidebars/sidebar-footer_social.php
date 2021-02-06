<?php

if ( !is_active_sidebar( 'footer-area' ) )
   return

?>

<?php if ( is_active_sidebar( 'footer-area' )  ): dynamic_sidebar( 'footer-area' ); endif ?>