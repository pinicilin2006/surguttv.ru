<section class="section_service_includes">
  <div class="container">
    <?php if( get_sub_field('section_constructor_list_title') ) { ?>
    <div class="section_title_center"><?php the_sub_field('section_constructor_list_title'); ?></div>
    <?php } ?>
    <div class="row">
      <?php if( have_rows('section_constructor_list_r') ): while ( have_rows('section_constructor_list_r') ) : the_row(); ?>
      <div class="col-md-4">
        <?php the_sub_field('section_constructor_list_ul'); ?>
      </div>
      <?php endwhile; else : endif; ?>
    </div>
  </div>
</section>