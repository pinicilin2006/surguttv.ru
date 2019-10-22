<div class="main_about wow fadeInUp">
  <div class="container">
    <div class="row">
      <div class="col-md-<?php if(get_field('about_bg', 70)) { echo '6'; } else { echo '12'; } ?>">
        <div class="main_about_title"><?php the_field('about_title', 70); ?></div>
        <div class="main_about_text"><?php the_field('about_content', 70); ?></div>
      </div>
      <?php if(get_field('about_bg', 70)) { ?>
      <div class="col-md-6 main_about_img" style="background-image:url(<?php the_field('about_bg', 70); ?>)"></div>
      <?php } ?>
    </div>
  </div>
</div>
<div class="main_partners wow fadeInUp">
  <div class="container">
    <div class="row">
      <?php $main_parnt=0; if( have_rows('about_partner',70) ): while ( have_rows('about_partner',70) ) : the_row(); $main_parnt++; endwhile; else : endif; ?>
      <?php if( have_rows('about_partner',70) ): while ( have_rows('about_partner',70) ) : the_row(); ?>
      <div class="col-md-<?php if($main_parnt==1) { echo '12'; } elseif($main_parnt==2) { echo '6'; } elseif($main_parnt==3) { echo '4'; } elseif($main_parnt==4) { echo '3'; } else { echo '2'; } ?>"><div><div><img src="<?php the_sub_field('about_partner_e'); ?>"></div></div></div>
      <?php endwhile; else : endif; ?>
    </div>
  </div>
</div>