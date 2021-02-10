<?php 
    if ( function_exists( 'the_custom_logo' ) ) :     
      $custom_logo_id = get_theme_mod( 'custom_logo' );
      $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );        
      if ( has_custom_logo() ) : 
  ?>

        <a class="navbar-brand mr-auto" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img class="rounded" src="<?php echo esc_url( $logo[0] ) ?>" width="<?php echo absint( $logo[1] ) ?>" height="<?php echo absint( $logo[2] ) ?>" alt="<?php echo get_bloginfo( 'name', 'display' ) ?>">
          <h1 class="m-0 p-0 text-white"><?php echo  get_template_part( 'template-parts/site_title' ) ?></h1>
        </a>

      <?php else: ?>
        <a class="navbar-brand mr-auto" href="<?php echo esc_url( home_url( '/' ) ); ?>">          
          <h1 class="m-0 p-0 text-white"><?php echo get_template_part( 'template-parts/site_title' ) ?></h1>
        </a>

  <?php
      endif;
    endif;
  ?>