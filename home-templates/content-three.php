<!-- Three -->
  <section id="three" class="wrapper style4">
    <div class="inner">
      <header>
        <h2 class="line-between">Voorstellingen</h2>
      </header>
      <div>
        <?php while( have_rows('blocks') ): the_row(); ?>
          <?php if( get_sub_field('playlist') ): the_sub_field('playlist'); endif; ?>
        <?php endwhile; ?>

      </div>
      <ul class="actions">
        <li><a style="text-align:center;" href="<?php echo esc_url( home_url( '/speellijst' ) ); ?>" class="button">Meer</a></li>
      </ul>
    </div>
  </section>
