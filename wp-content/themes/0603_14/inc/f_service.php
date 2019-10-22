<div class="main_service wow fadeInUp">
  <div class="row">
    <?php $main_serv_bg_1=1; if( have_rows('service',78) ): while ( have_rows('service',78) ) : the_row(); ?>
      <?php if($main_serv_bg_1==1 || $main_serv_bg_1==2) { ?>
      <div class="col-md-6 main_service_h main_service_bg <?php if($main_serv_bg_1==1) { echo 'main_service_bg_left'; } else { echo 'main_service_bg_right'; } ?>" style="background-image:url(<?php the_sub_field('service_img'); ?>)"></div>
      <?php } ?>
    <?php $main_serv_bg_1++; endwhile; else : endif; ?>
    <div class="container">
      <div class="row">
        <?php $main_serv_c_1=1; if( have_rows('service',78) ): while ( have_rows('service',78) ) : the_row(); ?>
          <?php if($main_serv_c_1==1 || $main_serv_c_1==2) { ?>
            <div class="col-md-6 main_service_h">
              <div class="main_service_in">
                <div class="main_service_title"><?php the_sub_field('service_title'); ?></div>
                <div class="main_service_text"><?php the_sub_field('service_text'); ?></div>
                <?php $value = get_sub_field("service_url");if( $value ) { ?><a href="<?php the_sub_field('service_url'); ?>" class="main_service_url">Подробнее</a><?php } ?>
              </div>
            </div>
          <?php } ?>
        <?php $main_serv_c_1++; endwhile; else : endif; ?>
      </div>
    </div>  
  </div>
  <div class="row">
    <?php $main_serv_bg_2=1; if( have_rows('service',78) ): while ( have_rows('service',78) ) : the_row(); ?>
      <?php if($main_serv_bg_2==3 || $main_serv_bg_2==4) { ?>
      <div class="col-md-12 main_service_h main_service_bg <?php if($main_serv_bg_2==3) { echo 'main_service_bg_left'; } else { echo 'main_service_bg_right'; } ?>" style="background-image:url(<?php the_sub_field('service_img'); ?>)"></div>
      <?php } ?>
    <?php $main_serv_bg_2++; endwhile; else : endif; ?>
    <div class="container">
      <div class="row">
        <?php $main_serv_c_2=1; if( have_rows('service',78) ): while ( have_rows('service',78) ) : the_row(); ?>
          <?php if($main_serv_c_2==3 || $main_serv_c_2==4) { ?>
            <div class="col-md-12 main_service_h">
              <div class="main_service_in">
                <div class="main_service_title"><?php the_sub_field('service_title'); ?></div>
                <div class="main_service_text"><?php the_sub_field('service_text'); ?></div>
                <?php $value = get_sub_field("service_url");if( $value ) { ?><a href="<?php the_sub_field('service_url'); ?>" class="main_service_url">Подробнее</a><?php } ?>
              </div>
            </div>
          <?php } ?>
        <?php $main_serv_c_2++; endwhile; else : endif; ?>
      </div>
    </div>  
  </div>
  <div class="row">
    <?php $main_serv_bg_3=1; if( have_rows('service',78) ): while ( have_rows('service',78) ) : the_row(); ?>
      <?php if($main_serv_bg_3==5 || $main_serv_bg_3==6) { ?>
      <div class="col-md-6 main_service_h main_service_bg <?php if($main_serv_bg_3==5) { echo 'main_service_bg_left'; } else { echo 'main_service_bg_right'; } ?>" style="background-image:url(<?php the_sub_field('service_img'); ?>)"></div>
      <?php } ?>
    <?php $main_serv_bg_3++; endwhile; else : endif; ?>
    <div class="container">
      <div class="row">
        <?php $main_serv_c_3=1; if( have_rows('service',78) ): while ( have_rows('service',78) ) : the_row(); ?>
          <?php if($main_serv_c_3==5 || $main_serv_c_3==6) { ?>
            <div class="col-md-6 main_service_h">
              <div class="main_service_in">
                <div class="main_service_title"><?php the_sub_field('service_title'); ?></div>
                <div class="main_service_text"><?php the_sub_field('service_text'); ?></div>
                <?php $value = get_sub_field("service_url");if( $value ) { ?><a href="<?php the_sub_field('service_url'); ?>" class="main_service_url">Подробнее</a><?php } ?>
              </div>
            </div>
          <?php } ?>
        <?php $main_serv_c_3++; endwhile; else : endif; ?>
      </div>
    </div>  
  </div>
  <div class="row">
    <?php $main_serv_bg_4=1; if( have_rows('service',78) ): while ( have_rows('service',78) ) : the_row(); ?>
      <?php if($main_serv_bg_4==7 || $main_serv_bg_4==8) { ?>
      <div class="col-md-6 main_service_h main_service_bg <?php if($main_serv_bg_4==7) { echo 'main_service_bg_left'; } else { echo 'main_service_bg_right'; } ?>" style="background-image:url(<?php the_sub_field('service_img'); ?>)"></div>
      <?php } ?>
    <?php $main_serv_bg_4++; endwhile; else : endif; ?>
    <div class="container">
      <div class="row">
        <?php $main_serv_c_4=1; if( have_rows('service',78) ): while ( have_rows('service',78) ) : the_row(); ?>
          <?php if($main_serv_c_4==7 || $main_serv_c_4==8) { ?>
            <div class="col-md-6 main_service_h">
              <div class="main_service_in">
                <div class="main_service_title"><?php the_sub_field('service_title'); ?></div>
                <div class="main_service_text"><?php the_sub_field('service_text'); ?></div>
                <?php $value = get_sub_field("service_url");if( $value ) { ?><a href="<?php the_sub_field('service_url'); ?>" class="main_service_url">Подробнее</a><?php } ?>
              </div>
            </div>
          <?php } ?>
        <?php $main_serv_c_4++; endwhile; else : endif; ?>
      </div>
    </div>  
  </div>
</div>