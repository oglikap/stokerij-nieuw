<?php if (is_single()) : ?>
  <hr />
  <ul class="navigation">
    <?php previous_post_link('<li class="icon fa-angle-left"> %link </li>', '%title'); ?>
    <?php next_post_link('<li>%link <i class="fa fa-angle-right"></i></li>', '%title'); ?>
  </ul>

 <?php else : ?>

  <ul class="navigation">
    <li class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></li>
    <li class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></li>
  </ul>

 <?php endif; ?>
