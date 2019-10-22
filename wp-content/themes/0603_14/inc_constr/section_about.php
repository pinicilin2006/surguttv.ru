<section class="section_about">
  <div class="container">
    <?php if( get_sub_field('section_constructor_about_title') ) { ?>
    <div class="section_title_center"><?php the_sub_field('section_constructor_about_title'); ?></div>
    <?php } ?>
    <?php if( get_sub_field('section_constructor_about_content') ) { ?>
    <div class="section_subtitle_center"><?php the_sub_field('section_constructor_about_content'); ?></div>
    <?php } ?>
    <div class="row">
      <?php $about_col=1; if( have_rows('section_constructor_about_r') ): while ( have_rows('section_constructor_about_r') ) : the_row(); ?>
      <div class="col-md-4">
        <?php if( get_sub_field('section_constructor_about_r_img') ) { ?>
        <div class="section_about_img sai_<?php echo $about_col; ?>" style="background-image:url(<?php the_sub_field('section_constructor_about_r_img'); ?>)"></div>
        <?php } ?>
        <?php if( get_sub_field('section_constructor_about_r_title') ) { ?>
          <p><?php the_sub_field('section_constructor_about_r_title'); ?></p>
        <?php } ?>
        <?php if( get_sub_field('section_constructor_about_r_text') ) { ?>
          <span><?php the_sub_field('section_constructor_about_r_text'); ?></span>
        <?php } ?>
      </div>
      <?php $about_col++; endwhile; else : endif; ?>
    </div>
  </div>
</section>