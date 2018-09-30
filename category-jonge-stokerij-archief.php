<?php get_header(); ?>

  <?php if( have_posts() ) : ?>

    <article id="main">

      <section class="wrapper style5">

        <div class="inner" style="text-align:center;">
          <?php if( ! is_paged() ) {
            echo wpautop( term_description() );
          } ?>

          <?php while ( have_posts() ) : the_post(); ?>

          <?php endwhile; endif; ?>

          <?php include( get_template_directory() . '/includes/jong-archief.php' ); ?>
        </div>

      </section>


    </article>

<?php get_footer(); ?>
