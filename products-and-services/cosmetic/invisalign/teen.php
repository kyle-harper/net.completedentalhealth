<?php
	require '../../../inc/utility.php';
	$urlRoot = curRootURL();
	$page = 'invisalign-teen';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Invisalign Teen - San Diego, CA | Complete Dental Health</title>
	<meta name="description" content="Invisalign Teen in San Diego. Invisalign Elite Provider Dr. Tim Collins, DDS knows how teens can make the most of invisalign. Free consultation!">
	<meta name="keywords" content="invisalign teen, invisalign teen san diego, invisalign teen cost, invisalign teen cost, invisalign teen clear braces">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<base href="<?= $urlRoot; ?>" />	
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="canonical" href="<?= $urlRoot; ?>invisalign-teen/">	
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
	<?php include '../../../inc/header.php'; ?>
</header>

<div id="dim"></div>
<div id="contact-form" class="contact-form" data-referrer="Invisalign Teen">
	<form id="consultation-request" name="consultation-request" style="display: none;">
        <div class="text-align-center" style="margin: 1% 1% 1% 1%;">
			<div id="close-form" class="float-right">
				<img class="hover-bright" src="images/lightbox/close.png" alt="close form" />
			</div>
			<div class="text-large text-orange text-align-center text-light" style="margin-bottom: 8px;">Cool. Let's get you set up!</div>
			<div class="field-pane text-align-center">
				<span class="text-medium text-orange text-light">How would you like us to contact you?</span><br />
				<span class="validation-text text-micro text-red text-heavy" style="display: none;">Please enter a valid email or phone</span>
				<input type="text" class="contact-form-input text-medium" id="name" name="name" placeholder="Name"></input>
				<input type="text" class="contact-form-input text-medium" id="contact" name="contact" placeholder="Email or Phone">
			</div>
			<div class="field-pane text-align-center">
				<span class="text-medium text-orange text-light">Optional: tell us more about your teeth</span><br />
			    <span class="text-small text-dark-gray text-light" style="margin-bottom: 5px; margin-top: 5px;">What type of bite do you have?</span><br />
				<input type="radio" name="bite" id="overbite" value="overbite"></input><label for="overbite">Overbite</label>&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="radio" name="bite" id="underbite" value="underbite"></input><label for="underbite">Underbite</label><hr />
				<span class="text-small text-dark-gray text-light" style="margin-bottom: 5px; margin-top: 5px;">Do you have either of these concerns?</span><br />
				<input type="checkbox" name="concerns" id="crowding" value="crowding"><label for="crowding">Crowding</label>&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="checkbox" name="concerns" id="gaps" value="gaps"><label for="gaps">Gaps</label><br />
			</div>
			<div class="field-pane text-align center">
				<span class="text-medium text-orange text-light" style="margin-top:11px;">Any questions or concerns?</span><br />
				<textarea class="contact-form-textarea text-medium" id="comments" name="comments" rows="3" placeholder="How can we help?"></textarea>
			</div>
			<div id="send-consultation-request" class="button text-large text-heavy text-white disabled">SEND</div>
		</div>
	</form>
</div>

<div class="content">
	<div class="article">
		<div class="box-wide show-640 hide-900 hide-1200"></div>
		<div class="box-wide">
			<div class="box ratio2_1 opacity-90">
				<div class="box-content">
					<img class="fill" src="images/invisalign-teen.jpg" alt="invisalign teen page, complete dental health in hillcrest san diego, dr tim collins dds"/>
				</div>
			</div>
		</div>
		<div class="box-wide">		
			<h1 class="text-align-left">Invisalign Teen in San Diego by Dr. Tim Collins, DDS</h1>
			<span class="text-micro text-ghost">By <a rel="author" target=_"blank" href="about.php">Complete Dental Health</a></span>
                <p>
					Invisalign Teen is an exciting way for teens to reach their goal of straight teeth, without braces!
					<br /><br />The best part is that Invisalign Teen is clear, meaning no one will see the sleek and discrete aligner trays you are wearing.
					<br /><br />
					<p class="blockquote">
						No one ever needs to know you are receiving orthodontic treatment, unless of course you let them in on your little secret.
					</p>
					<br />No attention-getting head gear, no unsightly brackets, no need to hide your wonderful smile while undergoing treatment.
					<br /><br />It gets even better: no need to avoid your favorite crunchy, chewy, sticky, and gooey foods while using Invisalign &#8211; just pop out your aligner and enjoy, then brush and pop the aligner back in.
                </p>
				<h2><br />How Does Invisalign Teen Work?</h2>
                <p>
					<img class="inline-top-left" src="images/invisalign-aligner.jpg" alt="invisalign teen aligner"/>
					Basically, Invisalign Teen starts with a free consultation, where Dr. Collins will assess where you are versus where you would like to be. If you decide to move forward, he then custom-builds a treatment plan for you, which is sent off to the Invisalign factory to produce a series of aligners. Each set of aligners in the series is to be worn two weeks, and each new set you move into makes your teeth that much closer to perfectly straight. It&#146;s that simple!
					<br /><br />Chances are, you will need about 20-30 aligners to make your transformation to totally straight teeth. Some teens require less, some require more depending on the complexity of the treatment. So that makes most treatments about a year in duration, with a little wiggle room.
					<br /><br />For more information, check out our <a href="products-and-services/cosmetic/invisalign/index.php">Invisalign main page</a>.
                </p>
				<h3><br />Why Choose Dr. Tim Collins, DDS as Your Invisalign Teen Dentist in San Diego?</h3>
                <p>
					Dr. Collins is really, really good at what he does. He has helped hundreds of patients to perfection through the Invisalign process &#8211; many of them teens &#8211; and he has the experience to back up his practice. He even teaches Invisalign and Invisalign Teen to other practicing dentists on his time off!
					<br /><br />And did we mention you could have results like these?
					<div class="box ratio4_1">
						<div class="box-content">
							<a href="images/smile-makeover/jason-j/smile-makeover-jason-2.jpg" alt="invisalign before and after photo" data-lightbox="invisalign-teen" data-title="More fabulous Invisalign Teen transformations coming soon!">				
								<img class="fill hover-bright" src="images/smile-makeover/jason-j/smile-makeover-jason-2.jpg" alt="invisalign teen before and after photo"/>
							</a>
						</div>
					</div>
				</p>
				<h4><br />Join Us for a Free Consultation for Invisalign Teen in San Diego</h4>
                <p>
					If you are thinking about investing in Invisalign Teen, you have nothing to lose to <a href="contact.php">call our friendly staff</a> and set up a free consultation. Get the chance to meet us, and let Dr. Collins show you what is possible. There is absolutely no risk &#8211; just a great opportunity for us to meet you, answer your questions, and help you better understand the process. We look forward to meeting you!
                </p>				
		</div>
	</div>
</div>

<footer>
	<?php include '../../../inc/footer.php'; ?>
</footer>


<script src="javascripts/jquery-1.11.1.min.js"></script>
<script src="javascripts/jquery.sidr.min.js"></script>
<script src="javascripts/lightbox.min.js"></script>
<script src="javascripts/cdh.utility.js"></script>
<script src="javascripts/contact-form.js"></script>


</body>
</html>