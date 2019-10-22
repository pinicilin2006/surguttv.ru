<?php get_header(); ?>
  <?php if(is_front_page()) { ?>
    <?php include 'inc/f_service.php'; ?>
    <?php include 'inc/f_advantages.php'; ?>
    <?php include 'inc/f_about.php'; ?>
    <?php if(! get_field('hide_main_news',196) ) { ?>
    <?php include 'inc/f_news.php'; ?>
    <?php } ?>
    <?php if(! get_field('hide_main_reviews',196) ) { ?>
    <?php include 'inc/f_reviews.php'; ?>
    <?php } ?>
  <?php } else { ?>
    <div class="container section_text <?php if(!is_front_page()) { echo 'container-page'; } ?>">
      <?php if(is_category()) { ?>
        <div class="page">
          <section class="section_title">
            <div class="container">
              <div><?php $category = get_the_category(); echo $category[0]->cat_name; ?></div>
            </div>
          </section>
        </div>
      <?php } ?>
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <div class="post" id="post-<?php the_ID(); ?>">
            <?php if(is_category()) { ?>
              <h3><?php the_title(); ?></h3>
            <?php } elseif(is_search()) { ?>
              <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
              <hr>
            <?php } else { ?>
              <div class="page">
                <section class="section_title">
                  <div class="container">
                    <div><?php the_title(); ?></div>
                  </div>
                </section>
              </div>
            <?php } ?>
            <div class="entry">
              <?php if(is_category()) { ?>
                <?php the_excerpt(); ?>
                <?php $value = get_field("news_url");if( $value ) { ?><a class="news_more" href="<?php the_permalink(); ?>">Подробнее</a><?php } else {} ?>
              <?php } elseif(is_search()) {} else { ?>
                <?php the_content(); ?>
              <?php } ?>
            </div>
          </div>
          <?php if(is_category()) { ?>
            <hr>
          <?php } ?>
        <?php endwhile; ?>
      <?php else : ?>
        <h1>404</h1>
        <hr>
        <div class="entry">По Вашему запросу ничего не найдено.</div>
      <?php endif; ?>
      <?php if(is_category()) { ?><div class="category-paginator"> <?php if (function_exists('wp_corenavi')) wp_corenavi(); ?></div><?php } ?>
    </div>
  <?php } ?>
<?php get_footer(); ?>