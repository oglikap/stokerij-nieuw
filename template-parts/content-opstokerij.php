<!-- Main -->
  <article id="main">
    <header>
      <div class="inner"></div>
    </header>
    <section class="wrapper style2">
      <div class="inner">
        <div class="box">
          <h2 class="major"><?php the_title(); ?></h2>
          <p><?php the_content(); ?></p>
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
