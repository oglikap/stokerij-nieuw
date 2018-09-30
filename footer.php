<!-- Footer -->
  <footer id="footer">

    <?php
    if ( is_active_sidebar( 'sidebar-2' ) ||
       is_active_sidebar( 'sidebar-3' ) ||
       is_active_sidebar( 'sidebar-4' ) ||
       is_active_sidebar( 'sidebar-5' )):
    ?>

      <aside class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'twentyseventeen' ); ?>">
        <?php
        if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
          <div class="widget-column footer-widget-1">
            <?php dynamic_sidebar( 'sidebar-2' ); ?>
          </div>
        <?php }
        if ( is_active_sidebar( 'sidebar-3' ) ) { ?>
          <div class="widget-column footer-widget-2">
            <?php dynamic_sidebar( 'sidebar-3' ); ?>
          </div>
        <?php }
         ?>

      </aside><!-- .widget-area -->

    <?php endif; ?>

    <ul class="icons">
      <li><a href="https://www.facebook.com/stokerijsdam/" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
      <li><a href="https://www.instagram.com/stokerijschiedam/" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
      <li><a href="mailto:info@destokerijschiedam.nl" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
    </ul>
    <!-- Copyright -->
    <ul class="copyright">
      <li><?php echo date('Y') . '' ;?> &copy; Stichting De Stokerij Schiedam.</li>
      <li>Wennekerpand - Vijgensteeg 2, 3111 PT Schiedam</li>
      <li>Galvanistraat 13, 3112EA Schiedam</li>
    </ul>
  </footer>

</div><!-- #page-wrapper -->

<?php wp_footer(); ?>
</body>
</html>
