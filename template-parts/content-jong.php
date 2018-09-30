<article id="main">

  <header>
    <div class="inner">
      <div class="box flex">
        <h2><?php the_title(); ?></h2>
        <?php if( have_rows('row') ): ?>

          <?php while( have_rows('row') ): the_row(); ?>
            <p><?php if( get_sub_field('subtitle') ): the_sub_field('subtitle'); endif; ?></p>
      </div>
    </div>
  </header>




    <section class="wrapper style5">
      <div class="inner">
        <?php the_content(); ?>
        <span>
          <?php the_post_thumbnail('landscape'); ?>
        </span>

        <?php include( get_template_directory() . '/includes/jong.php' ); ?>

        <footer>
          <p>
            <?php $link = get_sub_field('interest');
            if( $link ): ?>
            BENIEUWD WAT DE JONGE STOKERIJ AL GEDAAN HEEFT? <a href="<?php echo $link['url'];?>"><?php echo $link['title']; ?></a>
          <?php endif; ?>
          </p>
        </footer>

      </div>
    </section>

    <?php endwhile; ?>

  </article>

<?php endif; ?>
