<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sol
 */
?>

<footer>
      <section class="footer-widgets">
        <div class="container">
          <div class="row">
            
            <?php if( is_active_sidebar( 'sol-sidebar-footer1' ) ): ?>
              <div class="col-md-3 col-12">
                <?php dynamic_sidebar( 'sol-sidebar-footer1' ); ?>
              </div>
            <?php endif; ?>
            <?php if( is_active_sidebar( 'sol-sidebar-footer2' ) ): ?>
              <div class="col-md-3 col-12">
                <?php dynamic_sidebar( 'sol-sidebar-footer2' ); ?>
              </div>
            <?php endif; ?>
            <?php if( is_active_sidebar( 'sol-sidebar-footer3' ) ): ?>
              <div class="col-md-3 col-12">
                <?php dynamic_sidebar( 'sol-sidebar-footer3' ); ?>
              </div>
            <?php endif; ?>
            <?php if( is_active_sidebar( 'sol-sidebar-footer4' ) ): ?>
              <div class="col-md-3 col-12">
                <?php dynamic_sidebar( 'sol-sidebar-footer4' ); ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </section>
      <section class="copyright">
        <div class="container">
          <div class="row">
            <div class="copyright-text col-12 col-md-6">
              <p><?php echo esc_html( get_theme_mod( 'set_copyright', __( 'Copyright X - All Rights Reserved', 'sol' ) ) ); ?></p>
            </div>
            <nav class="footer-menu col-12 col-md-6 text-left text-md-right">
              <?php 
                wp_nav_menu(
                  array(
                    'theme_location' => 'sol_footer_menu'
                  )
                );
              ?>
            </nav>
          </div>
        </div>
      </section>
    </footer>
  </div>
<?php wp_footer(); ?>
</body>
</html>