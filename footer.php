

<!-- Footer -->
<footer>
   <div class="container">
      <div class="row justify-content-center footer-row-primary">

         <?php if ( is_active_sidebar ( 'footer-1' )  ): ?>
            <div class="col-auto col-sm order-1">
               <?php get_template_part( 'template-parts/sidebars/sidebar', 'footer_1' ) ?>
            </div>
         <?php endif ?>

         <?php if ( is_active_sidebar ( 'footer-area' )  ): ?>         
               <ul class="col-sm footer-social order-0 order-sm-2 mb-5 mb-sm-0">
                  <?php get_template_part( 'template-parts/sidebars/sidebar', 'footer_social' ) ?>
               </ul>
         <?php endif ?>

      </div>
      <?php if ( is_active_sidebar ( 'footer-2' )  ): ?>
         <div class="row footer-row-primary">            
            <div class="col">
               <?php get_template_part( 'template-parts/sidebars/sidebar', 'footer_2' ) ?>
            </div>
         </div>
      <?php endif ?>
      <div class="row">
         <div class="col-sm-12 footer-copyright">
            <?php echo basictheme_copyright() ?>
         </div>
      </div>
   </div>
</footer>
<!-- End Footer -->

<?php wp_footer(  ); ?>

<!-- <script>
	new WOW().init();
</script> -->
</div>
</body>
</html>