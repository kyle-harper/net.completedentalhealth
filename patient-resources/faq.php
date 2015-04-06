<?php
	require '../inc/utility.php';
	$urlRoot = curRootURL();
	$page = 'faq';
?>
<!DOCTYPE html>
<html>
<head>
	<title>FAQ | Complete Dental Health</title>
	<meta name="description" content="Dr. Tim Collins, DDS provides answers to our most popular questions at Complete Dental Health in San Diego, CA.">
	<meta name="keywords" content="dental faq, dental questions, frequently asked dental questions, dental questions san diego, dental faq san diego">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<base href="<?= $urlRoot; ?>" />	
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="canonical" href="<?= $urlRoot; ?>faq/">	
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
					<img class="fill" src="images/your-smile-is-our-reward-rommel.jpg" alt="frequently asked questions page, complete dental health in hillcrest san diego, dr tim collins dds"/>
				</div>
			</div>
		</div>
		<div class="box-wide">		
			<h1 class="text-align-left">Frequently Asked Questions (FAQ)</h1>
			<span class="text-micro text-ghost">By <a rel="author" target=_"blank" href="about.php">Complete Dental Health</a></span>
                <p>
                    <b>Do you take my insurance?</b>
                    <br />If you have a dental insurance plan that allows you to see a dentist of your choice (PPO), we will be happy to take care of all the insurance billing and paperwork.  However, we are out of network (i.e., not preferred providers) with all dental plans.
                    <br /><br />We suggest checking out our <a href="patient-resources/insurance.php">dental insurance advice page</a> for helpful advice on making the most of your dental insurance plan.
					<br /><br />
                    <b>Do you accept referrals?</b>
                    <br />We welcome them!  The greatest compliment you can pay us is trusting us with the care of your friends and family members.
					<br /><br />We have a patient referral promotion... for each patient you refer, you are entered in our quarterly drawing for a chance to win an iPad. The more patients you refer, the better chance you have of winning!
					<br /><br />We also offer $100 off a new patient exam for the patient you are referring, so they will benefit from your kind referral, too!
                    <br /><br />
                    <b>Is my treatment going to be painful?</b>
                    <br />We&#146;ll do our very best to ensure that it&#146;s not.  Both of our doctors are very gentle and are careful to make sure that you&#146;re completely numb before any work begins.  If you&#146;re nervous or tense about receiving dental care, we offer options such as oral sedation and nitrous oxide that can help you relax during your treatment.
                    <br /><br />
                    <b>Can I get all my work done at once?</b>
                    <br />The use of <a href="patient-resources/sedation.php">oral sedation</a> often makes it possible for patients to have many procedures done at one time.  If this is something you&#146;d like to do, please talk with our doctors.
                    <br /><br />
                    <b>Can you straighten my teeth?</b>
                    <br />Many of our patients have achieved straighter teeth through the use of Invisalign<span class="text-sup">&#174;</span> clear braces.  Dr. Tim Collins, DDS is one of the top dentists in the San Diego area when it comes to the use of Invisalign. 
                    <br /><br />
                    If you&#146;re interested in getting straighter teeth without the use of unattractive metal braces, please <a href="contact.php">contact our office</a> for an evaluation appointment.
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