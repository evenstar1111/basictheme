<?php 
  if ( have_posts() ) : 
      while ( have_posts() ) : the_post(); ?>
      
      <div class="card border-0 mb-3">
        <div class="card-header bg-white border-0">
          <?php if ( is_single() ): ?>
            <span class="small text-muted"><?php the_date(  ); ?></span>
            <?php get_template_part('template-parts/contents/content', 'tag') ?>
          <?php endif ?>
          <h3>
            <a href="<?php echo esc_url( get_permalink(  ) ) ?>"><?php the_title(); ?></a>
          </h3>
        </div>
        <div class="card-body pt-0">
          <span class="card-text">
            <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) ?>">
              <?php the_author(); ?>
            </a>,
          </span>
          <span class="small text-muted">&nbsp;<?php the_time(); ?></span>
          <div class="my-4"></div>

          <?php if ( is_home() ): ?>            
            <p><?php the_excerpt() ?></p>
          <?php elseif ( is_single() ): ?>
            <p><?php the_category( '&nbsp;|&nbsp;' ); ?></p>
            <p><?php the_content() ?></p>
          <?php endif ?>

        </div>
      </div>

<?php endwhile;
  else :
      _e( 'Sorry, no posts matched your criteria.', 'vstheme' );
  endif;
?>
<nav class="pagination-links py-3">
  <div class="nav-next"><?php next_posts_link( 'Older posts' ); ?></div>
  <div class="nav-previous"><?php previous_posts_link( 'Newer posts' ); ?></div>
</nav>

<?php if ( is_single() ) comments_template() ?>