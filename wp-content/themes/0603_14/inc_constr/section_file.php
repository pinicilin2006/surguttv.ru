<section class="section_file">
  <div class="container">
    <div class="row">
      <?php $scfc=0; if( have_rows('section_constructor_file_r') ): while ( have_rows('section_constructor_file_r') ) : the_row(); $scfc++; endwhile; else : endif; ?>
      <?php $scfc_2=1; if( have_rows('section_constructor_file_r') ): while ( have_rows('section_constructor_file_r') ) : the_row(); ?>
      <div class="col-md-<?php if($scfc==1) { echo '12'; } elseif($scfc==2) { echo '6'; } elseif($scfc==3) { echo '4'; } elseif($scfc==4) { echo '3'; } ?>">
        <table>
          <tbody>
            <tr>
              <td rowspan="2" class="section_file_ico sfi_<?php echo $scfc_2; ?>" style="<?php if( get_sub_field('section_constructor_file_r_img') ) { ?>background-image:url(<?php the_sub_field('section_constructor_file_r_img'); ?>)<?php } ?>"></td>
              <td><?php the_sub_field('section_constructor_file_r_title'); ?></td>
            </tr>
            <tr>
              <td><a href="<?php the_sub_field('section_constructor_file_r_url'); ?>"><?php the_sub_field('section_constructor_file_r_url_text'); ?>Скачать файл</a></td>
            </tr>
          </tbody>
        </table>
      </div>
      <?php $scfc_2++; endwhile; else : endif; ?>
    </div>
  </div>
</section>