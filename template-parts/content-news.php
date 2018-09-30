<!-- Main -->
<article id="main">




  <section class="wrapper style5">
    <header style="text-align:center;">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logo-black.png" alt="logo stokerij" style="width:33%;opacity:.7;">
      <h2 class="line-between"><?php the_title(); ?></h2>
    </header>
      <section class="spotlight">

        <div class="image">
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('portrait'); ?>
          </a>
        </div>
        <div class="content">

          <?php the_content(); ?>

        </div>

      </section>

      <footer>
        <?php include( get_template_directory() . '/includes/navigation.php' ); ?>
      </footer>
    </section>
  </article>
