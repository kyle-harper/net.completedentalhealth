<?php
	require 'inc/utility.php';
	$urlRoot = curRootURL();
	$page = 'home';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dentist in Hillcrest - San Diego, CA | Complete Dental Health</title>
	<meta name="description" content="Hillcrest dentist Dr. Tim Collins, DDS welcomes you! General and cosmetic dentistry in Hillcrest, San Diego. Outstanding patient care, superior dentistry.">
	<meta name="keywords" content="complete dental health, dentist hillcrest, hillcrest dentist, dentist hillcrest san diego, cosmetic dentist hillcrest, cosmetic dentist hillcrest san diego">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<base href="<?= $urlRoot; ?>" />	
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="canonical" href="<?= $urlRoot; ?>privacy.php">	
	<link rel="stylesheet" href="stylesheets/navigation.css">
	<link rel="stylesheet" href="stylesheets/jquery.sidr.cdh.css">
	<link rel="stylesheet" href="stylesheets/lightbox.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/complete-dental-health-style.css">
	<link rel="stylesheet" type="text/css" media="screen and (max-width:479px)" href="stylesheets/240.css">
	<link rel="stylesheet" type="text/css" media="screen and (min-width:480px) and (max-width:639px)" href="stylesheets/480.css">
	<link rel="stylesheet" type="text/css" media="screen and (min-width:640px) and (max-width:899px)" href="stylesheets/640.css">
	<link rel="stylesheet" type="text/css" media="screen and (min-width:900px) and (max-width:1199px)" href="stylesheets/900.css">
	<link rel="stylesheet" type="text/css" media="screen and (min-width:1200px)" href="stylesheets/1200.css">
	<!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" href="stylesheets/900.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/@media.css">
	<![endif]-->
</head>

<!--((()))-->

<body>

<header>
	<?php include 'inc/header.php'; ?>
</header>

<div class="content">
	<div class="article">
		<div class="box-wide show-640 hide-900 hide-1200"></div>
		<div class="box-wide">
			<div class="box ratio2_1 opacity-70">
				<div class="box-content">
					<img class="fill" src="images/your-smile-is-our-reward-rommel.jpg" alt="privacy policy page, complete dental health in hillcrest san diego, dr tim collins dds"/>
				</div>
			</div>
		</div>
		<div class="box-wide">		
			<h1 class="text-align-left">Privacy Policy</h1>
			<span class="text-micro text-ghost">By <a rel="author" target=_"blank" href="about.php">Complete Dental Health</a></span>
			<p>
				At Complete Dental Health, it is extremely important to us that your privacy is protected.
				<br /><br />
				Our privacy policy is simple: we will never share any information we have about you, be it personal information, medical history, photos, or anything else, unless you first explicitly allow it.
				<br /><br />
				That said, there are really only two cases in which we would even ask to share information about you:
				<br /><br />(1) In the case of referrals to other doctors, we will share information with the other doctor's office (x-rays, prescriptions, etc.) as it pertains to your treatment.
				<br /><br />(2) We love to tell the world about amazing results! If you explicitly allow us to share before/after photos, we may use them (without your name or any personal information attached) on our website or other marketing materials.
				<br /><br />
				That's it! Expecting more? :)
			</p>
		</div>
	</div>
</div>

<footer>
	<?php include 'inc/footer.php'; ?>
</footer>


<script src="javascripts/jquery-1.11.1.min.js"></script>
<script src="javascripts/jquery.sidr.min.js"></script>
<script src="javascripts/cdh.utility.js"></script>

	
</body>

</html>