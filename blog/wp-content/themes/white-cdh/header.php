<?php
/**
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package White
 */
/*PHP code added by Kyle Harper 2014.01.13 to include CDH header in WP blog*/
$page = 'blog';
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
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
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
<?php global $option_setting; ?>
<div id="top-bar">
	<!--2 lines below added by Kyle Harper 2014.08.29 for CDH header inclusion in WP blog-->
	<?php include $incRoot.'wp-header.php'; ?>
	<div style="height:50px;position:relative;display:block;"></div>
	<!-- -->
	<div class="container">
		<header id="masthead" class="site-header col-md-6" role="banner">
			<div class="site-branding">
				<?php if (isset($option_setting['logo']['url'])) : ?>
					<?php if( $option_setting['logo']['url'] != "" ) : ?>
						<div id="site-logo">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url($option_setting['logo']['url']) ?>"></a>
						</div>
					<?php else : ?>	
						<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php endif; ?>	
				<?php else : ?>	
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php endif; ?>	
			</div>
		</header><!-- #masthead -->
		
		<div id="right-head" class="col-md-6">
			<?php get_template_part('searchform', 'top') ?>
			
			<?php if($option_setting['enable-social-icons']) : ?>
				<div id="social-icons" class="col-md-12 col-sm-12">
					<?php get_template_part('social', 'fa'); ?>
				</div>
			<?php endif; ?>
		</div>
		
	</div><!--.container-->
</div><!--#top-bar-->

<div id="page" class="hfeed site container">

	<!--nav deleted by Kyle Harper on 2014.08.29 - redundant with site nav-->
	
	<?php get_template_part('slider') ?>
	
	<div id="content" class="site-content">