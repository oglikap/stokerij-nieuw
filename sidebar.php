<div id="sidebar">

  <hr />

  <?php if( have_rows('section') ): ?>
  <?php while( have_rows('section') ): the_row(); ?>

    <section class="block query">
      <header>
        <h3><?php if( get_sub_field('title') ): the_sub_field('title'); endif; ?></h3>
      </header>
      <?php if( get_sub_field('content') ): the_sub_field('content'); endif; ?>
      <footer>
        <?php if( get_sub_field('footer') ): the_sub_field('footer'); endif; ?>
      </footer>
    </section>

  <?php endwhile; ?>

  <?php endif; ?>

</div>
