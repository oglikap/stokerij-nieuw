<?php get_header(); ?>

<article id="main">
  <header>
    <div class="inner">
      <div class="box">
        <h2 class="major">Alle producties</h2>
      </div>
    </div>
  </header>
  <section class="wrapper style5 special">
    <div class="inner">
      <h2 class="line-between">Huidige en komende producties</h2>
      <div class="row">
        <?php //* The Query
        $exec_query = new WP_Query( array (
        'post_type' => array('productions', 'opstokerij'),
        //  'job_role'  => 'executive',
        'posts_per_page' => -1,
        'cat' => 13
        ) );

        //* The Loop
        if ( $exec_query->have_posts() ) { ?>

        <ul class="query" style="transform:translate(0px, 0px);">
          <?php
          while ( $exec_query->have_posts() ): $exec_query->the_post(); ?>
          <li>
            <header>
              <h3>
                <a href="<?php the_permalink(); ?>">
                  <?php the_title(); ?>
                </a>
              </h3>
            </header>
            <a href="<?php the_permalink(); ?>" class="">
              <?php the_post_thumbnail('square'); ?>
            </a>
            <?php the_excerpt(); ?>
          </li>
         <?php
            endwhile; ?>
          <?php
            //* Restore original Post Data
          wp_reset_postdata();}?>

      </div>

      <h2 class="line-between">Eerdere Producties</h2>
      <div class="row">
        <?php //* The Query
        $exec_query = new WP_Query( array (
        'post_type' => array('productions', 'opstokerij'),
        //  'job_role'  => 'executive',
        'posts_per_page' => -1,
        'cat' => 14
        ) );

        //* The Loop
        if ( $exec_query->have_posts() ) { ?>

        <ul class="query">
          <?php
          while ( $exec_query->have_posts() ): $exec_query->the_post(); ?>
          <li>
            <header>
              <h3>
                <a href="<?php the_permalink(); ?>">
                  <?php the_title(); ?>
                </a>
              </h3>
            </header>
            <a href="<?php the_permalink(); ?>" class="">
              <?php the_post_thumbnail('square'); ?>
            </a>
            <?php the_excerpt(); ?>
          </li>
         <?php
            endwhile; ?>
          <?php
            //* Restore original Post Data
          wp_reset_postdata();}?>
      </div>

    </div>
  </section>
</article>

<?php get_footer(); ?>
