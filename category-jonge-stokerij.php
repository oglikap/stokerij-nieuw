<?php get_header(); ?>

  <?php if( have_posts() ) : ?>

    <article id="main">
      <section class="wrapper style5">
        <?php if( ! is_paged() ) {
          echo wpautop( term_description() );
        } ?>

        <hr />

        <?php while ( have_posts() ) : the_post(); ?>

        <?php endwhile; endif; ?>

        <?php include( get_template_directory() . '/includes/jong.php' ); ?>
      </section>
    </article>

<?php get_footer(); ?>
