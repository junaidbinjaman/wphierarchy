<?php
/** 
 * Short description: This is the main footer for the site
 *
 * @package WordPress
 * @subpackage themename
 * Author: Junaid Jwolt
 * Date: 16/09/2022
 * time: 08:52 AM
 */
?>
<!-- Load wordpress script files -->

</div><!-- #content -->

  <footer id="colophon" class="site-footer" role="contentinfo">

    <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'wphierarchy' ) ); ?>">
      <?php printf( esc_html__( 'Proudly powered by %s', 'wphierarchy' ), 'WordPress' ); ?>
    </a>

  </footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
