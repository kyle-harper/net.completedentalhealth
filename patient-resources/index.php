<?php
	require '../inc/utility.php';
	$urlRoot = curRootURL();
	$page = 'patient-resources';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Patient Resources | Complete Dental Health</title>
	<meta name="description" content="We have compiled this section just for you. Here you will find useful tips and answers to many of your questions about our office.">
	<meta name="keywords" content="complete dental health, complete dental health patient resources, complete dental health san diego, complete dental health hillcrest, complete dental health dr collins">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<base href="<?= $urlRoot; ?>" />	
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="canonical" href="<?= $urlRoot; ?>patient-resources/">	
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
					<img class="fill" src="images/your-smile-is-our-reward-shiloh.jpg" alt="patient resources page, complete dental health in hillcrest san diego, dr tim collins dds"/>
				</div>
			</div>
		</div>
		<div class="box-wide">		
			<h1 class="text-align-left">Just For You</h1>
			<span class="text-micro text-ghost">By <a rel="author" target=_"blank" href="about.php">Complete Dental Health</a></span>
                <p>
                    We've compiled this section just for you. Here you will find useful tips and answers to many of your questions about our office.
                    <ul>
						<li><a href="patient-resources/faq.php">Frequently Asked Questions (FAQ)</a></li>
						<li><a href="patient-resources/finance-options.php">Finance Options</a></li>
						<li><a href="patient-resources/insurance.php">Dental Insurance Advice</a></li>
						<li><a href="patient-resources/forms/index.php">Patient Forms</a></li>
					</ul>
					We always appreciate your questions and feedback. Please <a href="contact.php">contact us anytime</a> if you have questions or comments to share with us.
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