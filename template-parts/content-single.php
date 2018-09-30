<article id="main">
  <header>
    <h2><?php the_title(); ?></h2>
    <p><?php the_excerpt(); ?></p>
  </header>
  <section class="wrapper style5">
    <div class="inner">
      <span class="image featured">
        <?php the_post_thumbnail( 'landscape' ); ?>
      </span>
      <?php the_content(); ?>

      <footer>
        <?php include( get_template_directory() . '/includes/navigation.php' ); ?>
      </footer>
    </div>
  </section>
</article>
