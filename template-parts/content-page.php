<article id="main">
  <header>
    <div class="inner">
      <div class="box flex">
        <h2 class="major"><?php the_title(); ?></h2>
        <?php if( get_field('excerpt') ): the_field('excerpt'); endif; ?>
      </div>
    </div>
  </header>
  <section class="wrapper style5">
    <div class="inner">
      <?php the_content(); ?>
    </div>
  </section>
  <footer>
    <?php
      $uittreksel = get_field('uittreksel');
      if( $uittreksel ): ?>
        <h3 style="text-align:center;">UITTREKSEL KvK</h3>
        <a class="button" href="<?php echo $uittreksel['url']; ?>"><?php echo $uittreksel['title']; ?></a>
        <hr / style="top:1.5em;margin-bottom:4em;">
      <?php endif; ?>


    <?php
      $statuut = get_field('statuten');
      if( $statuut ): ?>
        <h3 style="text-align:center;">STATUTEN</h3>
        <a class="button" href="<?php echo $statuut['url']; ?>"><?php echo $statuut['title']; ?></a>
        <hr / style="top:1.5em;margin-bottom:4em;">
      <?php endif; ?>

    <?php if( have_rows('downloads') ): ?>

      <h3 style="text-align:center">JAARSTUKKEN 2015 - 2017</h3>

      <ul>

        <?php while( have_rows('downloads') ): the_row(); ?>

        <li style="display:inline-block;"><?php $link = get_sub_field('link');
        if( $link ): ?>
          <a class="button" href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
        <?php endif; ?>
      </li>
    <?php endwhile; ?>

      </ul>
  </footer>

  <?php endif; ?>
</article>
