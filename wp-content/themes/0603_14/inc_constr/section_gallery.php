<section class="section_gallery">
  <div class="container">
    <div class="row">
      <?php if( get_sub_field('section_constructor_gallery_title') ) { ?>
      <div class="section_title_center"><?php the_sub_field('section_constructor_gallery_title'); ?></div>
      <?php } ?>
      <?php if( get_sub_field('section_constructor_gallery_subtitle') ) { ?>
      <div class="section_subtitle_center"><?php the_sub_field('section_constructor_gallery_subtitle'); ?></div>
      <?php } ?>
    </div>
  </div>
  <ul class="nav nav-tabs section_gallery_tabs" role="tablist">
    <?php $scgallery=1; if( have_rows('section_constructor_gallery_r') ): while ( have_rows('section_constructor_gallery_r') ) : the_row(); ?>
    <li class="nav-item">
      <a class="nav-link <?php if($scgallery==1) echo 'active'; ?>" href="#section_gallery_tabs_<?php echo $scgallery; ?>" role="tab" data-toggle="tab"><?php the_sub_field('section_constructor_gallery_r_title'); ?></a>
    </li>
    <?php $scgallery++; endwhile; else : endif; ?>
  </ul>
  <div class="tab-content section_gallery_content">
    <?php $scpangallery=1; if( have_rows('section_constructor_gallery_r') ): while ( have_rows('section_constructor_gallery_r') ) : the_row(); ?>
    <div role="tabpanel" class="tab-pane in <?php if($scpangallery==1) echo 'active'; ?>" id="section_gallery_tabs_<?php echo $scpangallery; ?>">
      <div class="section_gallery_content_in">
        <?php the_sub_field('section_constructor_gallery_r_content'); ?>
      </div>
    </div>
    <?php $scpangallery++; endwhile; else : endif; ?>
  </div>
</section>