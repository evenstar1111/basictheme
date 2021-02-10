<?php 



function basictheme_wooc_search_toggler( $atts ) {
	$a = shortcode_atts( array(
      'nav_link_class' => 'nav-link',
      'dd_id' => 'wooc_product_search_modal',
		'html_icon_class' => 'fa fa-search',
	), $atts );
   ob_start(); ?> 

   <a href="#<?php echo $a[ 'dd_id' ] ?>" class="<?php echo $a[ 'nav_link_class' ] ?>" data-toggle="modal">
      <i class="<?php echo $a[ 'html_icon_class' ] ?>"></i>
   </a>

	<?php return ob_get_clean(); 
}
add_shortcode( 'basictheme_wooc_search_toggler', 'basictheme_wooc_search_toggler' );