<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MBS
 */

?>

      <footer>
        <div class="top">
          <div class="content_max footer flexbox">
            <div class="footer__left">
              <div class="logo">
                <?php
                the_custom_logo();
                if ( is_front_page() && is_home() ) :
                  ?>
                  <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php
                else :
                  ?>
                  <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                <?php
                endif;
                $mbs_description = get_bloginfo( 'description', 'display' );
                if ( $mbs_description || is_customize_preview() ) :
                  ?>
                  <p class="site-description"><?php echo $mbs_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
                <?php endif; ?>
              </div>

              <p>
                Head Office <br>
                17, Squadron Blvd, <br>
                Suite-201, <br>
                New City, NY 10956 <br>
                (845) 539-5186
              </p>

              <?php
              wp_nav_menu(
                array(
                  'theme_location' => 'social',
                  'menu_id'        => 'social',
                )
              );
              ?>
            </div>

            <div class="footer__right">
              <?php
              wp_nav_menu(
                array(
                  'theme_location' => 'footer',
                  'menu_id'        => 'footer',
                )
              );
              ?>
            </div>
          </div>
        </div>

        <div class="bottom">
          <div class="content_max flexbox">
            <p>©2020 Maxim Business Solutions, LLC. All rights reserved. <a href="">Terms & Conditions</a>  Site by <a
                  href="">MBS</a></p>
          </div>
        </div>
      </footer><!-- #colophon -->

      <div id="toTop"></div>
    </main>

  <script src="//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>

  <!-- google captcha -->
  <script>
    let captcha_action = 'contact_form';

    grecaptcha.ready(function() {
      grecaptcha.execute('6LffswIaAAAAADjd9N01xHFNz9Gqp_LPFRrkzL9_', {action: captcha_action})
        .then(function(token) {
          if (token) {
            document.getElementById('token').value = token;
            document.getElementById('action').value = captcha_action;
          }
        });
    });
  </script>
  <!-- google captcha. end -->
  </body>
</html>

<?php wp_footer(); ?>

