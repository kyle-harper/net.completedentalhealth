<?php
/** * The template for displaying the footer * * Contains footer content and the closing of the #main and #page div elements. * * @package WordPress * @subpackage Twenty_Fourteen * @since Twenty Fourteen 1.0*/
/* PHP code added by Kyle Harper 2014.01.13 to include CDH footer in WP blog*//*Set the Resource Paths*/$incRoot = $_SERVER['DOCUMENT_ROOT'];if (substr_count($_SERVER["SERVER_NAME"], "localhost") == 0) {	if (substr_count($_SERVER["SERVER_NAME"], "canary") != 0) {		$urlRoot = "http://www.completedentalhealth.net/";		$incRoot .= "/canary/inc/";	} elseif (substr_count($_SERVER["SERVER_NAME"], "office") != 0) {		$urlRoot = "http://www.completedentalhealth.net/";		$incRoot .= "/office/inc/";	} else {		$urlRoot = "http://www.completedentalhealth.net/";		$incRoot .= "/inc/";	}} else {	$urlRoot = "http://localhost:3128/cdh/";	$incRoot .= "/cdh/inc/";}?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<!--line below added by Kyle Harper 2014.08.29 for CDH footer inclusion in WP blog-->
			<?php include $incRoot.'wp-footer.php'; ?>

			<?php get_sidebar( 'footer' ); ?>

			<div class="site-info">
				<?php do_action( 'twentyfourteen_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyfourteen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyfourteen' ), 'WordPress' ); ?></a>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>