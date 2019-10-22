<section class="section_single_worker">
  <div class="container">
    <div class="row">
      <div class="col-md-<?php if(get_sub_field('section_constructor_worker_img')) { echo '6'; } else { echo '12'; } ?> section_single_worker_in">
        <div><div>
          <p><?php the_sub_field('section_constructor_worker_text'); ?></p>
          <br>
          <p style="font-size:13px;color:#16769f;"><?php the_sub_field('section_constructor_worker_soo'); ?></p>
        </div></div>
      </div>
      <?php if(get_sub_field('section_constructor_worker_img')) { ?>
      <div class="col-md-6 section_single_worker_img">
        <div style="background-image:url(<?php the_sub_field('section_constructor_worker_img'); ?>)"></div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>