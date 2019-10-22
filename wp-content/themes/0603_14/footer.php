</main>
<footer>
  <div class="footer_contact">
    <div class="container">
      <div class="footer_contact_title">Наши Контакты</div>
        <div class="footer_contact_in">
          <div class="footer_contact_in_title">Оставьте заявку</div>
          <div class="footer_contact_in_subtitle">И МЕНЕДЖЕР СВЯЖЕТСЯ С ВАМИ В БЛИЖАЙШЕЕ ВРЕМЯ</div>
          <?php echo do_shortcode('[contact-form-7 id="601" title="Форма подвал"]'); ?>
        </div>
        <?php if( have_rows('footer_content',103) ) { ?>
        <div class="footer_contact_text">
          <div class="row">
          <?php if( have_rows('footer_content',103) ): while ( have_rows('footer_content',103) ) : the_row(); ?>
            <div class="col-md-<?php the_sub_field('footer_content_d'); ?>">
            <?php the_sub_field('footer_content_e'); ?>
            </div>
          <?php endwhile; else : endif; ?>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
    <div class="footer_bottom_info">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <p style="">ООО «ЭнерКомСервис» © 2019</p>
          </div>
          <div class="col-md-1">

          </div>
          <?php if(! get_field('hide_main_footer_menu',196) ) { ?>
            <div class="col-md-7">
              <nav class="navbar navbar-expand-md">
                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                  <?php wp_nav_menu(array('container_class' => '','container' => '', 'theme_location' => 'footer_menu','items_wrap' => '<ul id="%1$s" class="%2$s mr-auto nav navbar-nav">%3$s</ul>','walker' => new wp_bootstrap_navwalker,)); ?>
                </div>
              </nav>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</footer>
    <?php wp_footer(); ?>
    <?php the_field('f_code',101); ?>
    <?php the_field('f_code_2',101); ?>
    <script src="<?php bloginfo('template_directory'); ?>/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/autoheaight.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/wow.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/submenu.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/cascade-slider.js"></script>
    <script>
      jQuery(document).ready(function() {
        equalHeight(jQuery("#header_slider .carousel-item"));
        equalHeight(jQuery(".main_service_h"));
        equalHeight(jQuery(".main_news_container_in"));
        equalHeight(jQuery("#cascade-slider,#cascade-slider .cascade-slider_item"));
        jQuery('#header_slider').carousel();
        jQuery('#cascade-slider').cascadeSlider({
          itemClass: 'cascade-slider_item',
          arrowClass: 'cascade-slider_arrow'
        });

        
        equalHeight(jQuery(".page .section_service_price .row > div"));
        <?php 
          $page_table_r=1;
          foreach (range(1, 10) as $i) {
            echo 'jQuery("#table_price_'.$page_table_r.'").clone().appendTo("#table_price_c_'.$page_table_r.'");';
          $page_table_r++;
          }
        ?>
      });
      new WOW().init();
    </script>
  </body>
</html>