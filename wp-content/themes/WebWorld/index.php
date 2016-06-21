<?php get_header(); ?>
  <div class="slaider-wrap">
    <?php if( function_exists('cyclone_slider') ) cyclone_slider('123'); ?>
  </div>
  <div class="content-wrap">
    <div class="container">
      <div class="content-title">
        <h2>LOREMIPSUM IS <strong>SIMPLY DYMMY</strong> OF THE PRINTING.</h2>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make atype specimen book. 
          It has survived not only five centuries.</p>
      </div>
    </div>
    <div class="container ">
      <div class="row row-content">
        <div class="col-xs-6 col-sm-4 col-md-4 block-wrap ">
          <p class="icon"><a class=" block block-1" href="#"></a></p>
          <h4 class="block-title"><strong>Lorem Ipsum</strong> is simply</h4>
          <p class="content-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, amet quas rem labore. Deleniti, officia.</p>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-4 block-wrap active">
          <p class="icon"><a class="block block-2" href="#"></a></p>
          <h4 class="block-title"><strong>Lorem Ipsum</strong> is simply</h4>
          <p class="content-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus voluptatibus in temporibus natus, id repudiandae.</p>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 block-wrap">
          <p class="icon"><a class="block block-3" href="#"></a></p>
          <h4 class="block-title"><strong>Lorem Ipsum</strong> is simply</h4>
          <p class="content-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At ab, natus quaerat nesciunt illo quod.</p>
        </div>
      </div>
    </div>
    <div class="news-wrap">
      <div class="container">
        <div class="row">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="col-sm-6 col-md-4 news-block-wrap">
              <div class="news-block">
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
              <h5><strong><?php echo get_the_title()?></strong></h5>
              <p><?php echo get_the_content()?></p>
              </div>
            </div>
          <?php endwhile; else: ?>
            <p>Sorry, no posts matched your criteria.</p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>