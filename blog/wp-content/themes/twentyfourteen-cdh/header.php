<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
/*PHP code added by Kyle Harper 2014.01.13 to include CDH header in WP blog*/$page = 'blog';/*Set the Resource Paths*/
$incRoot = $_SERVER['DOCUMENT_ROOT'];if (substr_count($_SERVER["SERVER_NAME"], "localhost") == 0) {	if (substr_count($_SERVER["SERVER_NAME"], "canary") != 0) {		$urlRoot = "http://www.completedentalhealth.net/";		$incRoot .= "/canary/inc/";	} elseif (substr_count($_SERVER["SERVER_NAME"], "office") != 0) {		$urlRoot = "http://www.completedentalhealth.net/";		$incRoot .= "/office/inc/";	} else {		$urlRoot = "http://www.completedentalhealth.net/";		$incRoot .= "/inc/";	}} else {	$urlRoot = "http://localhost:3128/cdh/";	$incRoot .= "/cdh/inc/";
}
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<!--references below added by Kyle Harper 2014.01.13 for CDH header inclusion in WP blog-->
	<link rel="shortcut icon" href="<?= $urlRoot; ?>favicon.ico">
	<link rel="stylesheet" href="<?= $urlRoot; ?>stylesheets/navigation.css">
	<link rel="stylesheet" href="<?= $urlRoot; ?>stylesheets/jquery.sidr.cdh.css">
	<link rel="stylesheet" href="<?= $urlRoot; ?>stylesheets/lightbox.css">
	<link rel="stylesheet" type="text/css" href="<?= $urlRoot; ?>stylesheets/complete-dental-health-style.css">
	<link rel="stylesheet" type="text/css" media="screen and (max-width:479px)" href="<?= $urlRoot; ?>stylesheets/240.css">
	<link rel="stylesheet" type="text/css" media="screen and (min-width:480px) and (max-width:639px)" href="<?= $urlRoot; ?>stylesheets/480.css">
	<link rel="stylesheet" type="text/css" media="screen and (min-width:640px) and (max-width:899px)" href="<?= $urlRoot; ?>stylesheets/640.css">
	<link rel="stylesheet" type="text/css" media="screen and (min-width:900px) and (max-width:1199px)" href="<?= $urlRoot; ?>stylesheets/900.css">
	<link rel="stylesheet" type="text/css" media="screen and (min-width:1200px)" href="<?= $urlRoot; ?>stylesheets/1200.css">
	<!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" href="<?= $urlRoot; ?>stylesheets/900.css">
	<link rel="stylesheet" type="text/css" href="<?= $urlRoot; ?>stylesheets/@media.css">
	<![endif]-->
	<script type="text/javascript" src="<?= $urlRoot; ?>javascripts/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="<?= $urlRoot; ?>javascripts/jquery.sidr.min.js"></script>
	<script type="text/javascript" src="<?= $urlRoot; ?>javascripts/lightbox.min.js"></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php if ( get_header_image() ) : ?>
	<div id="site-header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
		</a>
	</div>
	<?php endif; ?>

	<header id="masthead" class="site-header" role="banner">
		<!--line below added by Kyle Harper 2014.08.29 for CDH header inclusion in WP blog-->
		<?php include $incRoot.'wp-header.php'; ?>

		<div class="header-main">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

			<div class="search-toggle">
				<a href="#search-container" class="screen-reader-text"><?php _e( 'Search', 'twentyfourteen' ); ?></a>
			</div>

			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<h1 class="menu-toggle"><?php _e( 'Primary Menu', 'twentyfourteen' ); ?></h1>
				<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
			</nav>
		</div>

		<div id="search-container" class="search-box-wrapper hide">
			<div class="search-box">
				<?php get_search_form(); ?>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="main" class="site-main">