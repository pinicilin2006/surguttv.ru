<?php
/*
Template Name: Конструктор
*/
?>
<?php get_header(); ?>
<main role="main" class="page">
  <section class="section_title">
    <div class="container">
      <div><h1><?php the_title(); ?></h1></div>
    </div>
  </section>
	<?php if( have_rows('n_constructor') ):
	    while ( have_rows('n_constructor') ) : the_row();
        if( get_row_layout() == 'section_constructor_banner' ) { include 'inc_constr/section_banner.php'; }
        if( get_row_layout() == 'section_constructor_file' ) { include 'inc_constr/section_file.php'; }
        if( get_row_layout() == 'section_constructor_tovar' ) { include 'inc_constr/section_tovar.php'; }
        if( get_row_layout() == 'section_constructor_gallery' ) { include 'inc_constr/section_gallery.php'; }
        if( get_row_layout() == 'section_constructor_table' ) { include 'inc_constr/section_table.php'; }
        if( get_row_layout() == 'section_constructor_text' ) { include 'inc_constr/section_text.php'; }
        if( get_row_layout() == 'section_constructor_command' ) { include 'inc_constr/section_command.php'; }
        if( get_row_layout() == 'section_constructor_about' ) { include 'inc_constr/section_about.php'; }
        if( get_row_layout() == 'section_constructor_service' ) { include 'inc_constr/section_service.php'; }
        if( get_row_layout() == 'section_constructor_help' ) { include 'inc_constr/section_help.php'; }
        if( get_row_layout() == 'section_constructor_worker' ) { include 'inc_constr/section_worker.php'; }
        if( get_row_layout() == 'section_constructor_price' ) { include 'inc_constr/section_price.php'; }
        if( get_row_layout() == 'section_constructor_list' ) { include 'inc_constr/section_list.php'; }
        if( get_row_layout() == 'section_constructor_map' ) { include 'inc_constr/section_map.php'; }
	    endwhile;
	else :
  endif; ?>
</main>
<?php get_footer(); ?>