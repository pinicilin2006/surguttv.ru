<div class="main_reviews wow fadeInUp">
  <div class="container">
    <div class="main_reviews_title">Отзывы о нашей работе</div>
    <div class="row">
      <div class="cascade-slider_container" id="cascade-slider">
        <div class="cascade-slider_slides">
          <?php $reviews_slider=1; $temp_query = $wp_query; ?>
          <?php query_posts('cat=4&showposts=10'); ?>
          <?php while (have_posts()) : the_post(); ?>
          <div class="cascade-slider_item">
            <?php if ( has_post_thumbnail() ) { ?>
            <div class="main_reviews_content_img" style="background-image:url(<?php the_post_thumbnail_url(); ?>)"></div>
            <?php } ?>
            <div class="main_reviews_content_title"><?php the_title(); ?></div>
            <div class="main_reviews_content_text"><?php the_excerpt();?></div>
          </div>
          <?php $reviews_slider++; endwhile; ?>
          <?php $wp_query = $temp_query; wp_reset_query(); ?>
        </div>
        <ol class="cascade-slider_nav">
          <?php $reviews_slider_2=1; $temp_query = $wp_query; ?>
          <?php query_posts('cat=4&showposts=10'); ?>
          <?php while (have_posts()) : the_post(); ?>
            <li class="cascade-slider_dot<?php if($reviews_slider_2==1) { echo ' cur'; } ?>"></li>
          <?php $reviews_slider_2++; endwhile; ?>
          <?php $wp_query = $temp_query; wp_reset_query(); ?>
        </ol>
      </div>
    </div>
  </div>
</div>