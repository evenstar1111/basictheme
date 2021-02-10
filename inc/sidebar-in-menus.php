<?php


add_shortcode('woocs_in_menu', function() {
   if (defined('WOOCS_LINK')) {
       $styles_link = WOOCS_LINK . 'views/shortcodes/styles/for-menu/';
       wp_enqueue_style('woocs-style-in-menu', $styles_link . "styles.css", array(), WOOCS_VERSION);
       wp_enqueue_script('woocs-style-in-menu', $styles_link . "actions.js", array('jquery'), WOOCS_VERSION);

       ob_start();
       ?>
       <span style="cursor: pointer;">Click on me!!</span><br />
       <div class="woocs-style-for-menu-dialog" style="display:none; text-align: left; width: 160px;">
           <div class="woocs-style-for-menu-title">Select Currency</div>
           <div class="woocs-style-for-menu-form"><?php echo do_shortcode('[woocs style=3]') ?></div>
       </div>

       <?php
       return ob_get_clean();
   }
});


?>