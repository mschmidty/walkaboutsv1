<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package walkaboutsv1.0
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
    <p>Like my blog, check out some other things I'm passionate about.</p>
    <div class="footer-links">
      <div class="footer-links-part">
        <div class="footer-links-part-top">
          <svg viewBox="0 0 308.81 169.11" xmlns="http://www.w3.org/2000/svg" version="1.1">
            <use xlink:href="#wrf_logo"></use>
          </svg>
          
        </div>
        <div class="footer-links-part-bottom">
          <h3>Western Rivers Flyfisher</h3>
          <p>Salt Lake City Owner since 1986</p>
          <a href="http://wrflyfisher.com">Western Rivers Flyfisher Online Store</a>
          <p>801-521-6424</p>
        </div>
      </div>
      <div class="footer-links-part">
        <div class="footer-links-part-top">
          <svg viewBox="0 0 103.112 130.398" xmlns="http://www.w3.org/2000/svg" version="1.1">
            <use xlink:href="#USAC"></use>
          </svg>
        </div>
        <h3>Utah Stream Access Coalition</h3>
        <p>Proud Supporter of the USAC</p>
        <a href="http://utahstreamaccess.org/">Check out their recent successes.</a>
      </div>
    </div>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'walkaboutsv1-0' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'walkaboutsv1-0' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'walkaboutsv1-0' ), 'walkaboutsv1-0', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
