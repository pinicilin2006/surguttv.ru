<section class="section_help">
  <div class="container">
    <div class="section_help_top_img"></div>
    <?php if( get_sub_field('section_constructor_service_title') ) { ?>
    <div class="section_title_center"><?php the_sub_field('section_constructor_service_title'); ?></div>
    <?php } ?>
    <div class="section_subtitle_center">
      <?php if( get_sub_field('section_constructor_service_text') ) { ?>
      <p><?php the_sub_field('section_constructor_service_text'); ?></p>
      <?php } ?>
      <?php if( have_rows('section_constructor_service_r_e') ): while ( have_rows('section_constructor_service_r_e') ) : the_row(); ?>
        <a class="section_help_email" style="color:#5aa92b;" href="mailto:<?php the_sub_field('section_constructor_service_r_email'); ?>"><?php the_sub_field('section_constructor_service_r_email'); ?></a><br>
      <?php endwhile; else : endif; ?>
      <?php if( have_rows('section_constructor_service_r_p') ): while ( have_rows('section_constructor_service_r_p') ) : the_row(); ?>
        <a class="section_help_phone" style="color:#5aa92b;" href="tel:<?php the_sub_field('section_constructor_service_r_phone'); ?>"><?php the_sub_field('section_constructor_service_r_phone'); ?></a><br>
      <?php endwhile; else : endif; ?>
    </div>
  </div>
</section>