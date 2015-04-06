<?php
	require '../inc/utility.php';
	$urlRoot = curRootURL();
	$page = 'insurance';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dental Insurance Advice | Complete Dental Health</title>
	<meta name="description" content="Dental insurance can be tricky. At Complete Dental Health, we aim to simplify things for you.">
	<meta name="keywords" content="dental insurance, dental insurance san diego, hmo dental insurance, ppo dental insurance, out of network dental insurance">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<base href="<?= $urlRoot; ?>" />	
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="canonical" href="<?= $urlRoot; ?>dental-insurance-advice/">
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
					<img class="fill" src="images/dental-insurance.jpg" alt="dental insurance page, complete dental health in hillcrest san diego, dr tim collins dds"/>
				</div>
			</div>
		</div>
		<div class="box-wide">		
			<h1 class="text-align-left">Dental Insurance Advice</h1>
			<span class="text-micro text-ghost">By <a rel="author" target=_"blank" href="about.php">Complete Dental Health</a></span>
			<p>
				Dental Insurance can be tricky. There are enough insurance buzz-words floating around to make your head spin, and it can be tough to make sense of it all, let alone keep up with the changes that invariably happen each year.
				<br /><br />Here at Complete Dental Health in San Diego, California, it is important to us that our patients understand the coverage they are receiving based on the plans they are paying their hard-earned money on.
				<br /><br />The truth is, not all dental insurance plans are created equal. Some plans offer great coverage and are worth it, others offer great coverage with a catch, the rest might not be worth it for you.
				<br /><br />Let's break it down for you, starting with the types of dental insurance plans: HMO and PPO.
			</p>
			<h2><br />HMO Dental Insurance Plans</h2>
			<p>
				Health Maintenance Organization (HMO) dental insurance provides coverage for a limited number of doctors, known as &#34;in-network&#34; doctors.
				<br /><br />The upside? HMO plans are generally among the most affordable. As long as you stay within the pre-approved list of in-network providers (such as 1-800-DENTIST), you are set and the coverage you receive will match what your plan allows.
				<br /><br />The drawback? HMO plans really limit the type of dental clinics and dentists you can see, especially when it comes to cosmetic dentistry. For instance, at Complete Dental Health we are out-of-network for all dental insurance, meaning your HMO plan will not offer coverage for our services.
				<br /><br />We are not alone in choosing to be out-of-network. Most quality-focused dentists choose to be out-of-network so they can focus more time on their patients and not have the insurance companies telling them how to conduct their patient care. This is not to say you cannot find an HMO dentist you can be very happy with. It just means that in-network dentists are facing greater demands from the insurance companies regarding how they deliver care.
				<br /><br />That's not something we want to worry about. We want to focus on you, and delivering the world-class <a href="products-and-services/cosmetic/index.php">natural-looking cosmetic dentistry</a> that Dr. Tim Collins, DDS is known for.
			</p>
			<h3><br />PPO Dental Insurance Plans</h3>
			<p>
				Preferred Provider Organization (PPO) dental insurance provides wider coverage than HMO plans. While PPO plans still provide the highest level of coverage for &#34;in-network&#34; doctors, these plans also make allowances for letting you choose any doctor you wish, even if they are out-of-network.
				<br /><br />The upside? PPO plans give you the freedom to see any doctor or dentist you wish, with coverage. In many cases, the out-of-network coverage can be the same as the in-network coverage, or really, really close to the same.
				<br /><br />The drawback? PPO plans can cost you more per month than HMO plans, and you need to check the out-of-network coverage to make sure it is high enough to meet your needs if you are thinking of choosing an out-of-network doctor.
				<br /><br />At Complete Dental Health, while we are out-of-network for all dental insurance, many of our patients with PPO plans are able to have their <a href="products-and-services/prevention/cleanings-and-checkups/index.php">cleanings and checkups</a> fully (100%) covered, and their larger procedures such as <a href="products-and-services/cosmetic/crowns-onlays-inlays.php">dental crowns</a> are usually covered to 80% or more of the total cost.
			</p>
			<h4><br />Contact Our Office to Learn More</h4>
			<p>
				Please feel free to <a href="contact.php">give us a call</a> anytime if you are wanting to see us, but worried about costs and how your dental insurance plan will work.
				<br /><br />You can also check out our <a href="blog/">blog</a> to read our articles on dental insurance advice. These articles are focused on questions we often see, and are aimed at educating you on how to make the most of your dental insurance plan.
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