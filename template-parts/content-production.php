<!-- Main -->
  <article id="main">
    <header>
      <div class="inner">
        <div class="box">
          <h2 class="major"><?php the_title(); ?></h2>
          <p><?php the_excerpt(); ?></p>
        </div>
      </div>

    </header>
    <section class="wrapper style5">
      <div class="inner">
        <h3 class="line-between"><?php the_title(); ?></h3>
        <div class="left">
          <?php the_content(); ?>
        </div>
        <div class="right">
          <?php the_post_thumbnail('portrait'); echo '<br />'; the_post_thumbnail_caption(); ?>
        </div>
      </div>

        <?php get_sidebar(); ?>
      <section class="gallery">
        <?php
        $images = get_field('gallery');

        if( $images ): ?>
        <hr />
          <ul>
            <?php foreach( $images as $image ): ?>
              <li>
                <a href="<?php echo $image['url']; ?>">
                  <img src="<?php echo $image['sizes']['square']; ?>" alt="<?php echo $image['alt']; ?>" />
                </a>
                <p class="wp-caption-text"><?php echo $image['caption']; ?></p>
              </li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>
      </section>
      <footer>
        <?php include( get_template_directory() . '/includes/navigation.php' ); ?>
      </footer>
      </section>

  </article>
