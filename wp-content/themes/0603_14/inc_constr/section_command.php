<section class="section_command" <?php if( get_sub_field('section_constructor_command_bg') ) { ?>style="background-color:<?php the_sub_field('section_constructor_command_bg'); ?> !important;"<?php } ?>>
  <div class="container">
    <?php if( get_sub_field('section_constructor_command_title') ) { ?>
    <div class="section_title_center"><?php the_sub_field('section_constructor_command_title'); ?></div>
    <?php } ?>
    <?php if( get_sub_field('section_constructor_command_subtitle') ) { ?>
    <div class="section_subtitle_center"><?php the_sub_field('section_constructor_command_subtitle'); ?></div>
    <?php } ?>
    <div class="row">
      <?php if( have_rows('section_constructor_command_r') ): while ( have_rows('section_constructor_command_r') ) : the_row(); ?>
      <div class="col-md-4">
        <div class="section_command_img" style="background-image:url(<?php the_sub_field('section_constructor_command_r_img'); ?>)"></div>
        <?php if( get_sub_field('section_constructor_command_r_title') ) { ?>
        <p><?php the_sub_field('section_constructor_command_r_title'); ?></p>
        <?php } ?>
        <?php if( get_sub_field('section_constructor_command_r_post') ) { ?>
        <p><?php the_sub_field('section_constructor_command_r_post'); ?></p>
        <?php } ?>
      </div>
      <?php endwhile; else : endif; ?>
    </div>
  </div>
</section>