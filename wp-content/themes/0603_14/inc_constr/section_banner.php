<section class="section_download section_download_n" style="<?php if( get_sub_field('section_constructor_banner_r_bg') ) { ?>background-image: url(<?php the_sub_field('section_constructor_banner_r_bg'); ?>) !important;<?php } ?>">
  <div class="section_download_bg_color" style="<?php if( get_sub_field('section_constructor_banner_r_bg_color') ) { ?>background:<?php the_sub_field('section_constructor_banner_r_bg_color'); ?> !important;<?php } ?>"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-11 section_download_in">
        <div class="row">
          <?php if( get_sub_field('section_constructor_banner_r_img') ) { ?>
          <div class="col-md-1 section_download_vertical">
            <div><div class="sdv_1" style="background-image:url(<?php the_sub_field('section_constructor_banner_r_img'); ?>)"></div></div>
          </div>
          <?php } ?>
          <div class="col-md-<?php if(!get_sub_field('section_constructor_banner_r_url') and !get_sub_field('section_constructor_banner_r_img') ) { echo '12'; } else { echo '6'; } ?>">
            <?php if( get_sub_field('section_constructor_banner_r_title') ) { ?><p><?php the_sub_field('section_constructor_banner_r_title'); ?></p><?php } ?>
            <?php if( get_sub_field('section_constructor_banner_r_text') ) { ?><span><?php the_sub_field('section_constructor_banner_r_text'); ?></span><?php } ?>
          </div>
          <?php if( get_sub_field('section_constructor_banner_r_url') ) { ?>
          <div class="col-md-5 section_download_vertical">
            <div><div><a href="<?php the_sub_field('section_constructor_banner_r_url'); ?>"><?php the_sub_field('section_constructor_banner_r_url_text'); ?></a></div></div>
          </div>
          <?php } ?>
          <?php if( get_sub_field('section_constructor_banner_r_url') ) { ?>
          <div class="entry" style="width:100%;"><?php the_sub_field('section_constructor_banner_r_content'); ?></div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>