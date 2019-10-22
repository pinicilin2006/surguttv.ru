<!DOCTYPE html>
<html>
  <head>
    <title><?php bloginfo('name'); wp_title(); ?></title>
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="x-rim-auto-match" content="none">
    <link href="<?php bloginfo('template_directory'); ?>/fonts/stylesheet.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <link href="<?php bloginfo('template_directory'); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/animate.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/theme_page.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/cascade-slider.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/mintScrollbar.css" rel="stylesheet">
    <?php wp_head(); ?>
    <style>
      .theme_14 .mai_1 {background-image:url(<?php bloginfo('template_directory'); ?>/theme_img/theme_img_14/theme_14_main_advantages_1.png);}
      .theme_14 .mai_2 {background-image:url(<?php bloginfo('template_directory'); ?>/theme_img/theme_img_14/theme_14_main_advantages_2.png);}
      .theme_14 .mai_3 {background-image:url(<?php bloginfo('template_directory'); ?>/theme_img/theme_img_14/theme_14_main_advantages_3.png);}
      .theme_14 .mai_4 {background-image:url(<?php bloginfo('template_directory'); ?>/theme_img/theme_img_14/theme_14_main_advantages_4.png);}
    </style>
  </head>
  <body class="theme_14 <?php the_field('body_select_color',55); ?>">
    <header class="wow fadeInDown <?php if(!is_front_page()) { echo 'header_page'; } ?>" style="background-image:url(<?php the_field('header_bg',55); ?>)">
      <div class="container">
        <div class="row header_top">
          <div class="header_col_logo col-md-4">
            <?php the_field('option_header_section_1_content',55); ?>
          </div>
          <div class="col-md-8">
            <nav class="navbar navbar-expand-md">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <?php wp_nav_menu(array('container_class' => '','container' => '', 'theme_location' => 'primary','items_wrap' => '<ul id="%1$s" class="%2$s mr-auto nav navbar-nav">%3$s</ul>','walker' => new wp_bootstrap_navwalker,)); ?>
              </div>
            </nav>
          </div>
        </div>
      </div>
      <?php if(get_field('hide_header_menu_2',196) ) { ?>
        <style>.header_page .header_slide {display:none;} .header_page {height:auto !important;padding-bottom:40px;}</style>
      <?php } ?>
      <div class="container header_slide">
        <div class="row">
          <div class="col-md-9">
            <div id="header_slider" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <?php $header_sl=0; if( have_rows('header_slide',55) ): while ( have_rows('header_slide',55) ) : the_row(); ?>
                <li data-target="#header_slider" data-slide-to="<?php echo $header_sl; ?>" class="<?php if($header_sl==0) { echo 'active'; } ?>"></li>
                <?php $header_sl++; endwhile; else : endif; ?>
              </ol>
              <div class="carousel-inner" role="listbox">
                <?php $header_sl2=1; if( have_rows('header_slide',55) ): while ( have_rows('header_slide',55) ) : the_row(); ?>
                <div class="carousel-item <?php if($header_sl2==1) { echo 'active'; } ?>">
                  <div class="header_slide_title"><?php the_sub_field('header_slide_title'); ?></div>
                  <div class="header_slide_text"><?php the_sub_field('header_slide_text'); ?></div>
                  <?php if(get_sub_field('header_slide_url')) { ?>
                  <a href="<?php the_sub_field('header_slide_url'); ?>" class="header_slide_url"><?php the_sub_field('header_slide_url_text'); ?></a>
                  <?php } ?>
                </div>
                <?php $header_sl2++; endwhile; else : endif; ?>
              </div>
              <a class="carousel-control-prev" href="#header_slider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span>&larr;</span>
              </a>
              <a class="carousel-control-next" href="#header_slider" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span>&rarr;</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </header>
    <main role="main">