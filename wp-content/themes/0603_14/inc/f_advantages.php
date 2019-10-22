<div class="main_advantages wow fadeInUp">
  <div class="main_advantages_title">
    <div class="container">
      <div class="main_advantages_in_title"><?php the_field('advantages_top_title',73); ?></div>
      <div class="main_advantages_in_subtitle"><?php the_field('advantages_top_subtitle',73); ?></div>
    </div>
  </div>
  <div class="main_advantages_container">
    <div class="container">
      <?php $advrow=1; if( have_rows('advantages',73) ): while ( have_rows('advantages',73) ) : the_row(); ?>
      <div class="row">
        <?php if ($advrow % 2 == 0) { ?>
        <div class="col-md-10">
          <div class="main_advantages_content_title"><?php the_sub_field('advantages_title',73); ?></div>
          <div class="main_advantages_content_text"><?php the_sub_field('advantages_text',73); ?></div>
        </div>
        <div class="col-md-2 main_advantages_ico mai_<?php echo $advrow; ?>" <?php if(get_sub_field('advantages_ico')) { ?> style="background-image:url(<?php the_sub_field('advantages_ico'); ?>);"<?php } ?>></div>

        

        <?php } else { ?>
        <div class="col-md-2 main_advantages_ico mai_<?php echo $advrow; ?>" <?php if(get_sub_field('advantages_ico')) { ?> style="background-image:url(<?php the_sub_field('advantages_ico'); ?>);"<?php } ?>></div>
        <div class="col-md-10">
          <div class="main_advantages_content_title"><?php the_sub_field('advantages_title',73); ?></div>
          <div class="main_advantages_content_text"><?php the_sub_field('advantages_text',73); ?></div>
        </div>
        <?php } ?>
      </div>
      <?php $advrow++; endwhile; else : endif; ?>
    </div>
  </div>
</div>