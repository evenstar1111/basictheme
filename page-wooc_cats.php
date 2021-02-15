<?php get_header(); ?>

<?php

$laptops_url = get_term_link( 41 );
$desktops_url = get_term_link( 40 );
$smartphones_url = get_term_link( 42 );
$headphones_url = get_term_link( 43 );

$laptops_img = wp_get_attachment_image_src( 325, 'medium' );
$desktops_img = wp_get_attachment_image_src( 324, 'medium' );
$smartphones_img = wp_get_attachment_image_src( 322, 'medium' );
$headphones_img = wp_get_attachment_image_src( 323, 'medium' );

$laptops = get_term_by( 'id', '41', 'product_cat' );
$desktops = get_term_by( 'id', '40', 'product_cat');
$smartphones = get_term_by( 'id', '42', 'product_cat');
$headphones = get_term_by( 'id', '43', 'product_cat');

?>

<div class="front_page_cat_box-wrapper">

   <div class="front_page_cat_box">
      <img src="<?php echo esc_url( $laptops_img[0] ) ?>" width="<?php echo $laptops_img[1] ?>" height="<?php echo $laptops_img[2] ?>" class="overlay_box_img">
      <div class="overlay_contents-wrapper">
         <a href="<?php echo $laptops_url ?>" class="overlay-button"><?php echo $laptops->name ?></a>
      </div>
   </div>

   <div class="front_page_cat_box">
      <img src="<?php echo esc_url( $desktops_img[0] ) ?>" width="<?php echo $desktops_img[1] ?>" height="<?php echo $desktops_img[2] ?>" class="overlay_box_img">
      <div class="overlay_contents-wrapper">
         <a href="<?php echo $desktops_url ?>" class="overlay-button"><?php echo $desktops->name ?></a>
      </div>
   </div>

   <div class="front_page_cat_box">
      <img src="<?php echo esc_url( $smartphones_img[0] ) ?>" width="<?php echo $smartphones_img[1] ?>" height="<?php echo $smartphones_img[2] ?>" class="overlay_box_img">
      <div class="overlay_contents-wrapper">
         <a href="<?php echo $smartphones_url ?>" class="overlay-button"><?php echo $smartphones->name ?></a>
      </div>
   </div>

   <div class="front_page_cat_box">
      <img src="<?php echo esc_url( $headphones_img[0] ) ?>" width="<?php echo $headphones_img[1] ?>" height="<?php echo $headphones_img[2] ?>" class="overlay_box_img">
      <div class="overlay_contents-wrapper">
         <a href="<?php echo $headphones_url ?>" class="overlay-button"><?php echo $headphones->name ?></a>
      </div>
   </div>

</div>


<?php get_footer() ?>
