<?php get_header(); ?>
  <div class="content-wrap">
</div>
    <div class="news-wrap">
      <div class="container wrap-big">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div class="news-block ">
              <?php the_post_thumbnail(); ?>
              <h5><strong><?php echo get_the_title()?></strong></h5>
              <p class="big"><?php echo get_the_content()?></p>
              </div>
          <?php endwhile; else: ?>
            <p>Sorry, no posts matched your criteria.</p>
          <?php endif; ?>
      </div>
    </div>
  </div>
<?php get_footer(); ?>