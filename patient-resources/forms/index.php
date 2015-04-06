<?php
	require '../../inc/utility.php';
	$urlRoot = curRootURL();
	$page = 'forms';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Patient Forms | Complete Dental Health</title>
	<meta name="description" content="Patient forms availaible online. Save time at your next appointment by filling out the New Patient Form and Health History Form in advance!">
	<meta name="keywords" content="complete dental health, forms, patient forms, health history forms, new patient forms">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<base href="<?= $urlRoot; ?>" />	
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="canonical" href="<?= $urlRoot; ?>forms/">	
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
					<img class="fill" src="images/your-smile-is-our-reward-jason.jpg" alt="patient forms page, complete dental health in hillcrest san diego, dr tim collins dds"/>
				</div>
			</div>
		</div>
		<div class="box-wide">		
			<h1 class="text-align-left">Patient Forms</h1>
			<span class="text-micro text-ghost">By <a rel="author" target=_"blank" href="about.php">Complete Dental Health</a></span>
			<p>
				<b>Homework from the Dentist?!?</b><br /><br />
				We hear you. In order for us to provide you with the best possible care, we need to know more about you. The <a target="_blank" href="patient-resources/forms/new-patient.pdf" title="click here">New Patient Form</a> informs our front office staff of key information necessary to fully serve you as a patient. The <a target="_blank" href="patient-resources/forms/health-history.pdf" title="click here">Health History Form</a> provides Dr. Collins with a baseline knowledge of your medical history that will enable him and our skilled support staff to deliver the best possible care, customized to your unique needs.<br><br>
			</p>
			<p>
				<b>New Patients - Start Here</b><br /><br />
				We require all new patients to fill out a <a target="_blank" href="patient-resources/forms/new-patient.pdf">New Patient Form</a> and <a target="_blank" href="health-history.pdf" title="click here">Health History Form</a> prior to their first visit with Dr. Collins. Save time at your next appointment by filling out the <a target="_blank" href="new-patient.pdf" title="click here">New Patient Form</a> and <a target="_blank" href="health-history.pdf" title="click here">Health History Form</a> in advance.<br><br>
			</p>
			<p>
				<b>Returning Patients - Provide or Update Your Health History</b><br /><br />
				We require updated health histories at least every three years, and sooner if you have a change in medical condition. Help us continue to deliver the best possible care by remembering to fill out the <a target="_blank" href="patient-resources/forms/health-history.pdf">Health History Form</a> every three years, as well as if you have a change in medical condition.<br><br>
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