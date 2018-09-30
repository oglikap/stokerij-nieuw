<!-- Banner -->
  <section id="banner">
    <div class="inner">
      <h2><?php the_custom_logo(); ?></h2>
      <div class="box">
        <p>
          <?php if( get_field('slogan') ): the_field('slogan'); endif; ?>
        </p>
      </div>
      <a href="#one" class="more scrolly">Naar onze voorstellingen</a>
    </div>
  </section>
