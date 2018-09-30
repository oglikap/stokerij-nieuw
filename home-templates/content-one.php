<!-- One -->
<section id="one" class="wrapper style1 special">
  <div class="inner">
    <header>
      <h2 class="line-between">Producties</h2>
      <h3 class="major" style="color:#2e3842">2018/2019</h3>
    </header>
  </div>
<!--  <div class="row">
    <//?php //* The Query
    $exec_query = new WP_Query( array (
    'post_type' => array( 'productions', 'opstokerij'),
    //  'job_role'  => 'executive',
    'posts_per_page' => -1,
    'cat' => 15
    ) );

    //* The Loop
    if ( $exec_query->have_posts() ) { ?>
    <ul class="query" style="transform:translate(0px, 0px);">
      <//?php
      while ( $exec_query->have_posts() ): $exec_query->the_post(); ?>
      <li class="hover">
        <header>
          <h3>
            <a href="<//?php the_permalink(); ?>">
              <//?php the_title(); ?>
            </a>
          </h3>
        </header>
        <a href="<//?php the_permalink(); ?>" class="">
          <//?php the_post_thumbnail('medium'); ?>
        </a>
        <//?php the_excerpt(); ?>
      </li>
     <//?php
        endwhile; ?>
      <//?php
        //* Restore original Post Data
      wp_reset_postdata();}?>

    </ul>



  </div>-->

<div class="flex">
  <?php //* The Query
  $exec_query = new WP_Query( array (
  'post_type' => array( 'productions', 'opstokerij'),
  //  'job_role'  => 'executive',
  'posts_per_page' => -1,
  'cat' => 15
  ) );

  //* The Loop
  if ( $exec_query->have_posts() ) { ?>
    <?php
    while ( $exec_query->have_posts() ): $exec_query->the_post(); ?>
    <div class="hvrbox">

      <a href="<?php the_permalink(); ?>">
        <span class="hvrbox-layer_bottom"><?php the_post_thumbnail('hvrbox'); ?></span>
      </a>
      <div class="hvrbox-layer_top hvrbox-layer_scale">
        <div class="hvrbox-text">
          <h3>
            <a href="<?php the_permalink();?>">
              <?php the_title(); ?>
            </a>
          </h3>
          <a href="<?php the_permalink(); ?>">

            <?php the_excerpt(); ?>
          </a>
        </div>
      </div>
    </div>
   <?php
      endwhile; ?>
    <?php
      //* Restore original Post Data
    wp_reset_postdata();}?>
</div>


  <div class="inner">
    <header>
      <h3 class="major" style="color:#2e3842;margin-top:4em;">Op tournee</h3>
    </header>
  </div>

  <div class="flex">
    <?php //* The Query
    $exec_query = new WP_Query( array (
    'post_type' => array( 'productions', 'opstokerij'),
    //  'job_role'  => 'executive',
    'posts_per_page' => -1,
    'cat' => ('13, -15')
    ) );

    //* The Loop
    if ( $exec_query->have_posts() ) { ?>
      <?php
      while ( $exec_query->have_posts() ): $exec_query->the_post(); ?>
      <div class="hvrbox">

        <a href="<?php the_permalink(); ?>">
          <span class="hvrbox-layer_bottom"><?php the_post_thumbnail('hvrbox'); ?></span>
        </a>
        <div class="hvrbox-layer_top hvrbox-layer_scale">
          <div class="hvrbox-text">
            <h3>
              <a href="<?php the_permalink();?>">
                <?php the_title(); ?>
              </a>
            </h3>
            <a href="<?php the_permalink(); ?>">

              <?php the_excerpt(); ?>
            </a>
          </div>
        </div>
      </div>
     <?php
        endwhile; ?>
      <?php
        //* Restore original Post Data
      wp_reset_postdata();}?>
  </div>



  <!--<div class="row">
    <//?php //* The Query
    $exec_query = new WP_Query( array (
    'post_type' => 'productions',
    //  'job_role'  => 'executive',
    'posts_per_page' => -1,
    'cat' => ('13, -15')
    ) );

    //* The Loop
    if ( $exec_query->have_posts() ) { ?>

    <ul class="query" style="transform:translate(0px, 0px);">
      <//?php
      while ( $exec_query->have_posts() ): $exec_query->the_post(); ?>
      <li>
        <header>
          <h3>
            <a href="<//?php the_permalink(); ?>">
              </?php the_title(); ?>
            </a>
          </h3>
        </header>
        <a href="</?php the_permalink(); ?>" class="">
          </?php the_post_thumbnail('square'); ?>
        </a>
        </?php the_excerpt(); ?>
      </li>
     </?php
        endwhile; ?>
      </?php
        //* Restore original Post Data
      wp_reset_postdata();}?>

    </ul>
  </div>-->



</section>
