<?php
	require '../../../inc/utility.php';
	$urlRoot = curRootURL();
	$page = 'hygiene';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Oral Hygiene Care | Complete Dental Health</title>
	<meta name="description" content="Oral Hygiene starts with a great routine at home, and seeing a hygienist for regular cleanings. Check out our oral hygiene tips and tricks.">
	<meta name="keywords" content="oral hygiene, oral hygiene san diego, oral hygiene tips, oral hygiene treatments, oral hygiene products">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<base href="<?= $urlRoot; ?>" />	
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="canonical" href="<?= $urlRoot; ?>oral-hygiene/">
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
	<?php include '../../../inc/header.php'; ?>
</header>

<div class="content">
	<div class="article">
		<div class="box-wide show-640 hide-900 hide-1200"></div>
		<div class="box-wide">
			<div class="box ratio2_1 opacity-90">
				<div class="box-content">
					<img class="fill" src="images/your-smile-is-our-reward-shiloh.jpg" alt="cleanings and checkups page, complete dental health in hillcrest san diego, dr tim collins dds"/>
				</div>
			</div>
		</div>
		<div class="box-wide">		
			<h1 class="text-align-left">Oral Hygiene Treatments and Tips to Keep San Diego Healthy</h1>
			<span class="text-micro text-ghost">By <a rel="author" target=_"blank" href="about.php">Complete Dental Health</a></span>
			<p>
				At Complete Dental Health, the most important priority for us is to keep your teeth and gums healthy for life. We will do what it takes to get you to a healthy oral hygiene baseline. This is our first goal with all of our patients.
				<br /><br />Only after you achieve excellent oral hygiene will you be able to make the most of San Diego cosmetic dentist Dr. Tim Collins&#146; skills in <a href="products-and-services/cosmetic/index.php">natural-looking cosmetic dentistry</a>. This is something that Dr. Collins holds very firm to, as it is very important to him that your teeth function and last a lifetime.
			</p>			
			<h2><br />Check Out Our Oral Hygiene Services</h2>
			<p>
				Check out our section on <a href="products-and-services/prevention/cleanings-and-checkups/treatments.php">professional hygiene care</a> to learn about the preventative dentistry treatments we offer in San Diego. Also, we offer a variety of <a href="products-and-services/prevention/cleanings-and-checkups/products.php">products</a> for you to keep your oral hygiene on track between visits.
				<br /><br />We also have compiled a section on <a href="products-and-services/prevention/cleanings-and-checkups/tips.php">oral hygiene tips</a> for you to make the most of your brushing and flossing routine at home. Be sure to check out our <a href="blog/">blog</a> for even more tips and tricks!
			</p>
		</div>
	</div>
</div>

<footer>
	<?php include '../../../inc/footer.php'; ?>
</footer>


<script src="javascripts/jquery-1.11.1.min.js"></script>
<script src="javascripts/jquery.sidr.min.js"></script>
<script src="javascripts/cdh.utility.js"></script>


</body>
</html>