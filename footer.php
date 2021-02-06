

<!-- Footer -->
<footer>
   <div class="container">
      <?php if ( is_active_sidebar ( 'footer-area' )  ): ?>
         <div class="row">            
            <ul class="col-sm-12 footer-social">
               <?php get_template_part( 'template-parts/sidebars/sidebar', 'footer_social' ) ?>
            </ul>
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