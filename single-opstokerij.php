<?php
/**
* The template for displaying a single production.
*
* @package WordPress
* @subpackage Stokerij
* @since Stokerij 1.0
*/

get_header() ?>

<?php
// Start the loop.
while ( have_posts() ) : the_post();

  // Include the page content template.
  get_template_part( 'template-parts/content', 'opstokerij' );
  // End of the loop.
endwhile;
?>

<?php get_footer(); ?>
