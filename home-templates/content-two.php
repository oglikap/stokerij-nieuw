
    <?php //* The Query
    $exec_query = new WP_Query( array (
    'post_type' => 'news',
    //  'job_role'  => 'executive',
    'posts_per_page' => -1
    ) );

    //* The Loop
    if ( $exec_query->have_posts() ) { ?>

      <!-- Two -->
        <section id="two" class="wrapper alt style5" style="margin-top:-3em;">
          <div class="inner">
            <header>
              <h2 class="line-between">Nieuws</h2>
            </header>
          </div>


          <?php
          while ( $exec_query->have_posts() ): $exec_query->the_post(); ?>
            <section class="spotlight">

              <div class="image">
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('spotlight'); ?>
                </a>
              </div>
              <div class="content">
                <h2>
                  <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                  </a>
                </h2>
                <?php the_excerpt(); ?>
                <ul class="actions vertical">
                  <li><a href="<?php the_permalink(); ?>" class="button">Lees verder</a></li>
                </ul>
              </div>

            </section>
         <?php
            endwhile; ?>
          </section>
          <?php
            //* Restore original Post Data
          wp_reset_postdata();}?>
