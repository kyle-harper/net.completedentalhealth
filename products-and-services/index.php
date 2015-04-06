<?php
	require '../inc/utility.php';
	$urlRoot = curRootURL();
	$page = 'products-and-services';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dental Products and Services | Complete Dental Health</title>
	<meta name="description" content="Superior general, preventive, and cosmetic dentistry by Dr. Tim Collins, DDS. Bringing out brighter, healthier smiles in San Diego for over 20 years.">
	<meta name="keywords" content="dentistry san diego, cosmetic dentistry san diego, general dentistry san diego, preventive dentistry san diego">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<base href="<?= $urlRoot; ?>" />
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="canonical" href="<?= $urlRoot; ?>products-and-services/">	
	<link rel="stylesheet" href="stylesheets/navigation.css">
	<link rel="stylesheet" href="stylesheets/jquery.sidr.cdh.css">
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
	<?php include '../inc/header.php'; ?>
</header>

<div class="content">
	<div class="article">
		<div class="box-wide show-640 hide-900 hide-1200"></div>
		<div class="box-wide">
			<div class="box ratio2_1 opacity-70">
				<div class="box-content">
					<img class="fill" src="images/your-smile-is-our-reward-rommel.jpg" alt="products and services page, complete dental health in hillcrest san diego, dr tim collins dds"/>
				</div>
			</div>
		</div>
		<div class="box-wide">		
			<h1 class="text-align-left">World-class Dentistry in San Diego</h1>
			<span class="text-micro text-ghost">By <a rel="author" target=_"blank" href="about.php">Complete Dental Health</a></span>
			<p>
				At Complete Dental Health, our team of dental professionals is dedicated to preserving and restoring the health and beauty of our patients' smiles. As our patient, you will have access to superior general and cosmetic dentistry services provided by an elite team of San Diego dental professionals.
				<br /><br /><p class="blockquote">We provide the world-class cosmetic dentistry in San Diego that you are looking for. We expect nothing but the best from ourselves, and we deliver only the best for you!</p>
				<br />Through preventive and cosmetic dentistry treatments designed to improve the health of your smile, Dr. Tim Collins, DDS and his friendly, professional team can help you maintain a healthy smile for many years to come:<br /><br />
			</p>
			<ul>
				<li><a href="products-and-services/cosmetic/invisalign/index.php">Invisalign&#174; Clear Braces</a></li>
				<li><a href="products-and-services/prevention/relief/index.php">Sleep Apnea and TMJ Pain Relief Devices</a></li>
				<li><a href="products-and-services/prevention/cleanings-and-checkups/treatments.php">Cleanings and Checkups</a></li>
				<li><a href="products-and-services/prevention/cleanings-and-checkups/treatments.php">Periodontal/Laser Treatment</a></li>
				<li><a href="products-and-services/sedation/index.php">Sedation Dentistry</a></li>
				<li><a href="products-and-services/cosmetic/implants.php">Dental Implants</a></li>
				<li><a href="products-and-services/cosmetic/index.php">Natural-looking Cosmetic Dentistry</a></li>
				<li><a href="products-and-services/cosmetic/smile-makeover.php">Smile Makeovers</a></li>
				<li><a href="products-and-services/cosmetic/bonding.php">Dental Bonding</a></li>
				<li><a href="products-and-services/cosmetic/veneers.php">Porcelain Veneers</a></li>
				<li><a href="products-and-services/cosmetic/crowns-onlays-inlays.php">Porcelain Crowns and Onlays</a></li>
				<li><a href="products-and-services/cosmetic/fillings.php">Natural Restorations (Tooth-colored Fillings)</a></li>
				<li><a href="products-and-services/cosmetic/whitening.php">Teeth Whitening</a></li>
				<li><a href="products-and-services/cosmetic/dentures.php">Complete and Partial Dentures</a></li>
				<li><a href="products-and-services/prevention/cleanings-and-checkups/products.php">Oral Hygiene Products</a></li>
			</ul>
			<p>
				<br />Whether your goal is to improve the health of your smile or restore its functionality, our team at Complete Dental Health can help. We provide the world-class cosmetic dentistry in San Diego that you are looking for. We expect nothing but the best from ourselves, and we deliver only the best for you!
				<br /><br /><a href="contact.php">Contact us</a> to learn more about our preventive and cosmetic dentistry treatments or to schedule an appointment.
			</p>
		</div>
	</div>
</div>

<footer>
	<?php include '../inc/footer.php'; ?>
</footer>


<script src="javascripts/jquery-1.11.1.min.js"></script>
<script src="javascripts/jquery.sidr.min.js"></script>
<script src="javascripts/cdh.utility.js"></script>


</body>
</html>