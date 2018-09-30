<?php
/*
Template Name: Archives
*/
get_header(); ?>

  <?php while ( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'template-parts/content', 'archive' ); ?>

  <?php endwhile; ?>
<?php get_footer(); ?>
