<section class="section_service_price" <?php if( get_sub_field('section_constructor_price_bg') ) { ?>style="background-color:<?php the_sub_field('section_constructor_price_bg'); ?>!important;"<?php } ?>>
  <div class="container">
    <?php if( get_sub_field('section_constructor_price_title') ) { ?>
    <div class="section_title_center"><?php the_sub_field('section_constructor_price_title'); ?></div>
    <?php } ?>
    <?php if( get_sub_field('section_constructor_price_subtitle') ) { ?>
    <div class="section_subtitle_center"><?php the_sub_field('section_constructor_price_subtitle'); ?></div>
    <?php } ?>
    <div class="row">
      <?php if( have_rows('section_constructor_price_r') ): while ( have_rows('section_constructor_price_r') ) : the_row(); ?>
      <div class="col-md-4">
        <?php if( get_sub_field('section_constructor_price_r_img') ) { ?>
        <div style="margin:0 auto 20px;-webkit-border-radius: 100px;width:160px;height:160px;border-radius: 100px;background:url(<?php the_sub_field('section_constructor_price_r_img'); ?>) no-repeat center;bacground-size:cover;"></div>
        <?php } ?>
        <?php if( get_sub_field('section_constructor_price_r_title') ) { ?>
        <div class="section_service_price_title"><?php the_sub_field('section_constructor_price_r_title'); ?></div>
        <?php } ?>
        <?php if( get_sub_field('section_constructor_price_r_price') ) { ?>
        <div class="section_service_price_price"><?php the_sub_field('section_constructor_price_r_price'); ?> <?php if( get_sub_field('section_constructor_price_r_price_t') ) { ?><span><?php the_sub_field('section_constructor_price_r_price_t'); ?></span><?php } ?></div>
        <?php } ?>
        <?php if( get_sub_field('section_constructor_price_r_text') ) { ?>
        <div class="section_service_price_text">
          <p><?php the_sub_field('section_constructor_price_r_text'); ?></p>
        </div>
        <?php } ?>
        <?php if( get_sub_field('section_constructor_price_r_url') ) { ?>
        <a href="<?php the_sub_field('section_constructor_price_r_url'); ?>" class="section_service_price_url"><?php the_sub_field('section_constructor_price_r_url_text'); ?></a>
        <?php } ?>
      </div>
      <?php endwhile; else : endif; ?>
    </div>
  </div>
</section>