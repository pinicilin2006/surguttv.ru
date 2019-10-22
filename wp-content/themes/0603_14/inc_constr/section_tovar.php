<section class="section_single_product">
  <div class="container">
    <div class="row">
      <?php if( get_sub_field('section_constructor_tovar_img') ) { ?>
      <div class="col-md-<?php if(! get_sub_field('section_constructor_tovar_title') ) { echo '12'; } else { echo '6'; } ?>">
        <img style="width:100%" src="<?php the_sub_field('section_constructor_tovar_img'); ?>">
      </div>
      <?php } ?>
      <div class="col-md-<?php if(! get_sub_field('section_constructor_tovar_img') ) { echo '12'; } else { echo '6'; } ?>">
        <?php if( get_sub_field('section_constructor_tovar_star') ) { ?>
        <div class="section_single_product_star ssps_<?php the_sub_field('section_constructor_tovar_star'); ?>"></div>
        <?php } ?>
        <?php if( get_sub_field('section_constructor_tovar_title') ) { ?>
        <div class="section_single_product_title"><?php the_sub_field('section_constructor_tovar_title'); ?></div>
        <?php } ?>
        <?php if( get_sub_field('section_constructor_tovar_price') ) { ?>
        <div class="section_single_product_price"><?php the_sub_field('section_constructor_tovar_price'); ?></div>
        <?php } ?>
        <?php if( get_sub_field('section_constructor_tovar_url') ) { ?>
        <a href="<?php the_sub_field('section_constructor_tovar_url'); ?>" class="section_single_product_url"><?php the_sub_field('section_constructor_tovar_url_text'); ?></a>
        <?php } ?>
      </div>
      <?php if( get_sub_field('section_constructor_tovar_url_content') ) { ?>
      <div class="col-md-12">
        <div class="section_single_product_text entry">
          <?php the_sub_field('section_constructor_tovar_url_content'); ?>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>