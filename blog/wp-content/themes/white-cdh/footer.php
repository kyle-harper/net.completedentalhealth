<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package White
 */
 
 /* PHP code added by Kyle Harper 2014.01.13 to include CDH footer in WP blog*/

/*Set the Resource Paths*/
$incRoot = $_SERVER['DOCUMENT_ROOT'];
if (substr_count($_SERVER["SERVER_NAME"], "localhost") == 0) {
	if (substr_count($_SERVER["SERVER_NAME"], "canary") != 0) {
		$urlRoot = "http://www.completedentalhealth.net/";
		$incRoot .= "/canary/inc/";
	} elseif (substr_count($_SERVER["SERVER_NAME"], "office") != 0) {
		$urlRoot = "http://www.completedentalhealth.net/";
		$incRoot .= "/office/inc/";
	} else {
		$urlRoot = "http://www.completedentalhealth.net/";
		$incRoot .= "/inc/";
	}
} else {
	$urlRoot = "http://localhost:3128/cdh/";
	$incRoot .= "/cdh/inc/";
}

?>

	</div><!-- #content -->
</div><!-- #page -->

<?php get_template_part('sidebar', 'footer'); ?>

<footer id="colophon" class="site-footer" role="contentinfo">
	<!--line below added by Kyle Harper 2014.08.29 for CDH footer inclusion in WP blog-->
	<?php include $incRoot.'wp-footer.php'; ?>
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>