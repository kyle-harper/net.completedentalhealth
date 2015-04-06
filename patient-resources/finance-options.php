<?php
	require '../inc/utility.php';
	$urlRoot = curRootURL();
	$page = 'finance-options';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Flexible Dental Finance Options | Complete Dental Health</title>
	<meta name="description" content="Do not let finances stop you from getting the dental care you need. ZERO percent financing available, compassionate credit.">
	<meta name="keywords" content="dental finance, dental finance options, dental finance options san diego, dental financing, affordable dental financing">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<base href="<?= $urlRoot; ?>" />	
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="canonical" href="<?= $urlRoot; ?>finance-options/">	
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
					<img class="fill" src="images/your-smile-is-our-reward-mary.jpg" alt="finance options page, complete dental health in hillcrest san diego, dr tim collins dds"/>
				</div>
			</div>
		</div>
		<div class="box-wide">		
			<h1 class="text-align-left">Dental Finance Options</h1>
			<span class="text-micro text-ghost">By <a rel="author" target=_"blank" href="about.php">Complete Dental Health</a></span>
			<p>
				Although we are not in-network with any dental plans, you will have coverage allowances with us if your dental insurance plan allows you to choose a dentist freely, such as with a PPO dental plan. We do not accept any dental HMO plans.
				<br /><br />As a courtesy to you, we will file insurance paperwork and collect the insurance portion of your fee.  We do ask that you pay your portion of the fee at the time of your appointment.
				<br /><br />We want you to get the dental care that you want and need, so we offer ways to make it more affordable.
				<br /><br />We accept cash, check and credit card. We offer a 5 percent courtesy discount on prepayments for dental treatments over $300, and we also offer <a href="products-and-services/cosmetic/invisalign/military.php">military discounts</a>.
			</p>
			<h2><br />Flexible Financing Options</h2>
			<p>
				To make our dental treatments even more affordable, we are pleased to offer zero- and deferred-interest payment plans through CareCredit.
				<br /><br /><a target="_blank" href="http://www.carecredit.com"><img src="images/care-credit-logo.png"/></a>
				<br /><br />To qualify for CareCredit, simply <a target="_blank" href="https://www.carecredit.com/apply/confirm.html?encm=BmcEPQBiUTRQbAFlW29dNFFrBGcBZ1BlD2sMNVE5ATI">fill out the CareCredit application</a>. We would be happy to assist you with this process at the time we sit down and present the fees for your treatment.
				<br /><br />CareCredit is the leader in patient financing, and has helped more than 1 million patients get the treatment or procedures they need and want. With a comprehensive range of plan options, for treatment or procedure fees from $1* to over $25,000, we offer a plan and a low monthly payment to fit comfortably into almost every budget.
				<br /><br /><span class="text-micro">*CareCredit offers interest-free financing for amounts over $200.</span>
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