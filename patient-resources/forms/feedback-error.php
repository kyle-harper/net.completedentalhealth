<?php
// includes
require '../../inc/utility.php';

// initialize variables & defaults
$urlRoot = curRootURL();
$page = 'forms-feedback';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Send Us a Message | Complete Dental Health</title>
	<meta name="description" content="Use the form below to send your questions and comments directly to Dr. Collins. Sections marked with an asterisk (*) are required.">
	<meta name="keywords" content="complete dental health, contact complete dental health, complete dental health contact form, complete dental health message, complete dental health send message">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<base href="<?= $urlRoot; ?>" />	
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="canonical" href="<?= $urlRoot; ?>feedback/">	
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
	<?php include '../../inc/header.php'; ?>
</header>

<div class="content">
	<div class="article">
		<div class="box-wide show-640 hide-900 hide-1200"></div>
		<div class="box-wide">
			<div class="box ratio2_1 opacity-70">
				<div class="box-content">
					<img class="fill" src="images/your-smile-is-our-reward-mary.jpg" alt="sedation dentistry page, complete dental health in hillcrest san diego, dr tim collins dds"/>
				</div>
			</div>
		</div>
		<div class="box-wide">
			<h1 class="text-align-left">Oops!</h1>
			<span class="text-micro text-ghost">By <a rel="author" target=_"blank" href="about.php">Complete Dental Health</a></span>
			<h3>Sorry, the request could not send. Please call our friendly staff at 619-295-2202 and we can help you.</h3>
			<br />
			<p><a href="patient-resources/forms/feedback.php">Or, click here to try sending another message.</a></p>
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