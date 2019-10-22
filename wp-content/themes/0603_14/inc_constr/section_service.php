<section class="section_block_service" <?php if( get_sub_field('section_constructor_service_bg') ) { ?>style="background-color:<?php the_sub_field('section_constructor_service_bg'); ?>"<?php } ?>>
  <div class="container">
    <?php if( get_sub_field('section_constructor_service_title') ) { ?>
    <div class="section_title_center"><?php the_sub_field('section_constructor_service_title'); ?></div>
    <?php } ?>
    <?php if( get_sub_field('section_constructor_service_subtitle') ) { ?>
    <div class="section_subtitle_center"><?php the_sub_field('section_constructor_service_subtitle'); ?></div>
    <?php } ?>
    <div class="section_block_service_in">
      <div class="row">
        <?php if( get_sub_field('section_constructor_service_left_img') ) { ?>
        <div class="col-md-6">
          <div class="section_block_service_img" style="background-image:url(<?php the_sub_field('section_constructor_service_left_img'); ?>)"></div>
        </div>
        <?php } ?>
        <div class="col-md-<?php if(get_sub_field('section_constructor_service_left_img') ) { echo '6';} else { echo '12'; } ?> section_block_service_right">
          <div><div>
            <?php if( get_sub_field('section_constructor_service_right_title') ) { ?>
            <div class="section_block_service_title"><?php the_sub_field('section_constructor_service_right_title'); ?></div>
            <?php } ?>
            <div class="section_block_service_content">
              <?php the_sub_field('section_constructor_service_right_content'); ?>
            </div>
          </div></div>
        </div>
      </div>
    </div>
  </div>
</section>