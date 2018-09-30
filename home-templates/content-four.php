<?php if( have_rows('blocks') ): ?>

<section id="four" class="wrapper style5 special">

  <?php while( have_rows('blocks') ): the_row(); ?>

    <div class="inner">

      <h2 class="line-between">Facebook</h2>

      <?php if( get_sub_field('facebook') ): the_sub_field('facebook'); endif; ?>

      <h2 class="line-between">Instagram</h2>

      <?php echo wdi_feed(array('id'=>'1')); ?>

    </div>

  <?php endwhile; ?><!-- have_rows('blocks') -->

</section>

<?php endif; ?>
