<section class="section_table">
  <?php if( get_field('section_constructor_table_title') ) { ?>
  <div class="section_title_center"><?php the_field('section_constructor_table_title'); ?></div>
  <?php } ?>
  <?php $sectable=1; if( have_rows('section_constructor_table_r') ): while ( have_rows('section_constructor_table_r') ) : the_row(); ?>
  <div style="position:relative;width:100%;">
    <div class="container">
      <div id="table_price_<?php echo $sectable; ?>">
        <?php the_sub_field('section_constructor_table_r_in'); ?>
      </div>
    </div>
    <div class="table_price_c" id="table_price_c_<?php echo $sectable; ?>"></div>
  </div>
  <?php $sectable++; endwhile; else : endif; ?>
</section>