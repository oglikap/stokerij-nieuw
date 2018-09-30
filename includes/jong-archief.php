<?php $args = array('category' => '8', 'order' => 'ASC');
$postslist = get_posts( $args );
foreach ($postslist as $post) :
  setup_postdata( $post );
 ?>

 <header>
   <h3 class="line-between"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
   <span class="excerpt"><?php the_excerpt(); ?></span>
 </header>
 <?php the_content(); ?>
<?php
wp_reset_postdata();
endforeach; ?>
