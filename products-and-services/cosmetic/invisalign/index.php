<?php
	require '../../../inc/utility.php';
	$urlRoot = curRootURL();
	$page = 'invisalign';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Invisalign Clear Braces - San Diego, CA | Complete Dental Health</title>
	<meta name="description" content="Invisalign in San Diego. Work with 2011 Invisalign Elite Provider Dr. Tim Collins, DDS for the smile you’ve imagined. Free consultation!">
	<meta name="keywords" content="invisalign, invisalign san diego, invisalign dentist san diego, invisalign cost san diego, invisalign braces san diego">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<base href="<?= $urlRoot; ?>" />
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="canonical" href="<?= $urlRoot; ?>invisalign/">	
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
<div id="contact-form" class="contact-form" data-referrer="Invisalign">
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
			<div class="box ratio2_1 opacity-70">
				<div class="box-content">
					<img class="fill" src="images/your-smile-is-our-reward-jason.jpg" alt="invisalign page, complete dental health in hillcrest san diego, dr tim collins dds"/>
				</div>
			</div>
		</div>
		<div class="box-wide">		
			<h1 class="text-align-left">Providing Superior Invisalign for San Diego</h1>
			<span class="text-micro text-ghost">By <a rel="author" target=_"blank" href="about.php">Complete Dental Health</a></span>
			<p>
				Whether you are an adult or a <a href="products-and-services/cosmetic/invisalign/teen.php">teenager</a> we have a way for you to straighten your teeth without suffering through metal braces.
				<br /><br />If you are interested in having a straighter, healthier, more even and attractive smile, and especially if you are concerned about the effect metal braces may have on your social life, Invisalign<span class="text-sup">&#174;</span> invisible orthodontics may be the solution for you.
				<br /><br />Because Invisalign aligners are clear, no one needs to know that you are straightening your teeth but you and your cosmetic dentist.  Invisalign can be your invisible little secret.
				<br /><br />And did we mention you could have results like these?
				<div class="box ratio4_1">
					<div class="box-content">
						<a href="images/smile-makeover/mary-n/smile-makeover-mary-2.jpg" alt="invisalign before and after photo" data-lightbox="invisalign" data-title="More fabulous Invisalign transformations coming soon!">				
							<img class="fill hover-bright" src="images/smile-makeover/mary-n/smile-makeover-mary-2.jpg" alt="invisalign before and after photo"/>
						</a>
					</div>
				</div>
			</p>
			<h2 class="text-align-left"><br />Why We Think Dr. Tim Collins, DDS is the Best Invisalign Dentist in San Diego</h2>
			<div class="box-small box float-left">
				<div class="box-content inline-top-left">
					<img class="fill" src="images/dr-tim-collins-dds-invisalign.jpg" alt="invisalign san diego dentist dr tim collins dds, preferred provider, premier provider, elite provider" />
				</div>
			</div>
			<p>
				As an Invisalign dentist, Dr. Tim Collins, DDS has helped hundreds of patients to achieve the smiles of their dreams. He has received many accolades along the way, being named a Preferred Provider, Premier Provider, and the highest honor of Elite Provider of Invisalign.
			</p>
			<div class="box-wide">
				<p class="blockquote">
					Dr. Collins has a superior level of training and experience &#8211; he even teaches the Invisalign system to other dentists during his time off! Dr. Collins is the kind of perfectionist you want as an Invisalign dentist in San Diego.
				</p>
			</div>
			<p>
				But the story doesn't stop there. Dr. Collins is more than an Invisalign dentist; he is a general and cosmetic dentist with a deep understanding of what is in the long-term best interests of your dental health.
				<br /><br />Dr. Collins is a <a href="products-and-services/cosmetic/minimally-invasive-dentistry.php">minimally-invasive dentist</a> specializing in natural-looking cosmetic dentistry, meaning you will never face a trade-off between health and beauty. His focus is going to be to get you beautiful results that last, which optimize your lifelong dental health in the process.
			</p>
			<h3 class="text-align-left">What is Invisalign?</h3>
			<p>
				As an exciting alternative to conventional metal braces, Invisalign uses a series of clear, removable aligners to move teeth, instead of brackets or wires.
				<br /><br />Designed to look virtually invisible, Invisalign takes the embarrassment out of orthodontic treatment. Accordingly, many adults prefer Invisalign to other orthodontic solutions. Invisalign aligners are often more comfortable and convenient than traditional braces. Because the aligners are removable, brushing and flossing is simple and food options are unrestricted. Dr. Collins can help you determine whether Invisalign is right for your needs at a free consultation.
			</p>
			<h4 class="text-align-left">Invisalign Benefits</h4>
			<p>
				Many people choose Invisalign because it allows them to straighten their teeth inconspicuously, but there are numerous reasons why Invisalign is an excellent alternative to traditional metal braces:
				<ul>
					<li>It is easier to maintain good oral hygiene with Invisalign than with conventional braces.</li>
					<li>Invisalign straightens teeth without the use of brackets and wires that may irritate the soft tissues of the mouth.</li>
					<li>Because Invisalign aligners are removable, you won&#146;t have to avoid your favorite crunchy, chewy, or sticky foods.</li>
					<li>People who have their teeth straightened with Invisalign often achieve results faster than those who choose traditional braces.</li>
				</ul>
			</p>
			<h5 class="text-align-left">Cost of Invisalign in San Diego</h5>
			<p>
				The cost of your Invisalign treatment depends on the complexity of your case, and how many aligners you need to wear to get to your end result.
				<br /><br />Call our friendly staff for a FREE consultation and we can determine the cost once Dr. Collins evaluates your personal treatment goals.
				<br /><br />To make the process as affordable as we can, we will work with your dental insurance and we provide <a href="patient-resources/finance-options.php">flexible financing options</a> such as CareCredit. You will have all the numbers up front, so there will be no surprises and no pressure.
				<br /><br />We always proudly offer a <a href="products-and-services/cosmetic/invisalign/military.php">military discount</a> for our men and women in uniform. It is the least we can do to say &#8220;thank you&#8221; for your service and sacrifice for our enduring freedom.
			</p>
			<h6 class="text-align-left">Invisalign Treatment Process</h6>
			<p>
				First, Dr. Collins will develop a custom treatment plan designed to correct your dental issues and meet your aesthetic goals. To help you envision what your smile will look like after treatment, he will show you a digital image based on a computerized 3-D image of your mouth.
				<br /><br />This 3-D image, along with impressions of your teeth, will be used to create your custom Invisalign aligners. Depending on the degree of orthodontic problems you have, you may receive 20 to 30 aligners. Each aligner should be worn for approximately two weeks before you graduate to the next aligner in the series.
			</p>
			<h6>Contact Our Office for a FREE Consultation</h6>
			<p>
				Invisalign clear braces have helped millions of people enjoy healthier, more beautiful smiles. To find out if Invisalign can help you, too, <a href="contact.php">contact our office</a> for your FREE consultation today!
			</p>
		</div>
	</div>
</div>

<footer>
	<?php include '../../../inc/footer.php'; ?>
</footer>


<script src="javascripts/jquery-1.11.1.min.js"></script>
<script src="javascripts/jquery-ui-draggable.min.js"></script>
<script src="javascripts/jquery.sidr.min.js"></script>
<script src="javascripts/lightbox.min.js"></script>
<script src="javascripts/cdh.utility.js"></script>
<script src="javascripts/contact-form.js"></script>

</body>
</html>