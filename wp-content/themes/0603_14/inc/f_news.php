<div class="main_news wow fadeInUp">
  <div class="main_news_title">
    <div class="container">
      <div class="main_news_in_title">НОВОСТИ</div>
      <div class="main_news_in_subtitle"></div>
    </div>
  </div>
  <div class="main_news_container">
    <div class="container">
      <div class="row">
        <?php $temp_query = $wp_query; ?>
        <?php query_posts('cat=1&showposts=2'); ?>
        <?php while (have_posts()) : the_post(); ?>
        <div class="col-md-6">
          <div class="main_news_container_in">
            <div class="row">
             <?php if ( has_post_thumbnail() ) {  ?>
              <div class="col-md-5 main_news_img" style="background-image:url(<?php the_post_thumbnail_url(); ?>);"></div>
              <?php } ?>
              <div class="col-md-<?php if (! has_post_thumbnail() ) { echo '12'; } else  { echo '7'; } ?> main_news_block">
                <div class="main_news_content_title"><?php the_title();?></div>
                <div class="main_news_date"><?php the_time('d M Y'); ?></div>
                <div class="main_news_content_text"><?php the_excerpt();?></div>
                <?php $value = get_field("news_url");if( $value ) { ?><a class="main_news_url" href="<?php the_permalink(); ?>">Подробнее</a><?php } ?>
              </div>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
        <?php $wp_query = $temp_query; wp_reset_query(); ?>
      </div>
    </div>
  </div>
</div>