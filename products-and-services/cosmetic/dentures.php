<?php
	require '../../inc/utility.php';
	$urlRoot = curRootURL();
	$page = 'dentures';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dentures in San Diego | Complete Dental Health</title>
	<meta name="description" content="Dentures need to be beautiful, comfortable, and functional to allow you freedom. Dr. Tim Collins, DDS will apply his 20+ years of experience for you.">
	<meta name="keywords" content="dentures, partial dentures, complete dentures, dentures san diego, dentures hillcrest">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<base href="<?= $urlRoot; ?>" />	
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="canonical" href="<?= $urlRoot; ?>complete-and-partial-dentures/">	
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
	<?php include '../../inc/header.php'; ?>
</header>

<div class="content">
	<div class="article">
		<div class="box-wide show-640 hide-900 hide-1200"></div>
		<div class="box-wide">
			<div class="box ratio2_1 opacity-60">
				<div class="box-content">
					<img class="fill" src="images/dentures.jpg" alt="complete and parital dentures page, complete dental health in hillcrest san diego, dr tim collins dds"/>
				</div>
			</div>
		</div>
		<div class="box-wide">		
			<h1 class="text-align-left">Complete and Partial Dentures</h1>
			<span class="text-micro text-ghost">By <a rel="author" target=_"blank" href="about.php">Complete Dental Health</a></span>
			<p class="text-section-body">
				Despite the fact that the placement of <a href="products-and-services/cosmetic/implants.php">dental implants</a> is rising in popularity as a more comfortable, permanent way to replace missing teeth, dentures are still a mainstay of tooth replacement. Furthermore, new innovations have made the dentures of today much more comfortable and natural-looking than those worn by previous generations.
				<br /><br />
				<p class="blockquote">
					Dr. Tim Collins, DDS works with the best denture labs in the country to ensure your results are nothing short of amazing.
				</p>
				<br />As a third-generation dentist with over 20 years of experience, Dr. Collins has a strong grounding in the fundamentals when it comes to getting you a denture that functions as beautifully as it looks.
			</p>
			<p class="text-section-body">
				<br /><b>Schedule an Appointment at Our San Diego Office</b></a><br />
				<a href="contact.php">Contact our office</a> today to schedule an appointment or to request more information.<br /><br />
			</p>
		</div>
	</div>
</div>

<footer>
	<?php include '../../inc/footer.php'; ?>
</footer>


<script src="javascripts/jquery-1.11.1.min.js"></script>
<script src="javascripts/jquery.sidr.min.js"></script>
<script src="javascripts/cdh.utility.js"></script>


</body>
</html>