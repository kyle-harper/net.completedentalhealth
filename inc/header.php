<div class="nav-bar">
		<nav>
			<!--<div id="search" class="float-right"><a href="#search"><img src="images/search-icon.png" alt="search"/></a></div>-->
			<div id="map" class="float-right"><a target="_blank" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3355.701990673899!2d-117.16529999999997!3d32.74710300000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80d954d1ae36958f%3A0x4e292fc27ffed3ab!2sComplete+Dental+Health!5e0!3m2!1sen!2sus!4v1401558706996"><img src="images/map-icon.png" alt="map"/></a></div>
			<div id="call" class="call-button float-right"><a href="tel:+16192952202"><img src="images/call-icon.png" alt="call"/></a></div>
			<div id="simple-menu" class="float-left"><a href="<?= $urlRoot; ?>sitemap.html"><img src="images/nav-icon.png" alt="menu"/></a></div>
			<ul>
				<?php if ($page != 'home') { ?><li><a href="<?= $urlRoot; ?>"><div class="nav-link"><span class="text-nav-bar">Home</span></div></a><?php } ?>
				<li class=""><a href="<?= $urlRoot; ?>about.php" <?php if ($page == 'about' && $page != '0') { ?>class="live"<?php } ?>><div class="nav-link"><span class="text-nav-bar">About Us</span></div></a>
				<li class=""><a href="<?= $urlRoot; ?>contact.php" <?php if ($page == 'contact' && $page != '0') { ?>class="live"<?php } ?>><div class="nav-link"><span class="text-nav-bar">Contact Us</span></div></a>
				<li class=""><a href="<?= $urlRoot; ?>blog/" <?php if ($page == 'blog' && $page != '0') { ?>class="live"<?php } ?>><div class="nav-link"><span class="text-nav-bar">Blog</span></div></a>
				<li class="px700"><a href="<?= $urlRoot; ?>invisalign/" <?php if ($page == 'invisalign' && $page != '0') { ?>class="live"<?php } ?>><div class="nav-link"><span class="text-nav-bar">Invisalign</span></div></a>
				<li class="px870"><a href="<?= $urlRoot; ?>smile-makeover/" <?php if ($page == 'smile-makeover' && $page != '0') { ?>class="live"<?php } ?>><div class="nav-link"><span class="text-nav-bar">Smile Makeovers</span></div></a>
				<li class="px1080"><a href="<?= $urlRoot; ?>sedation-dentistry/" <?php if ($page == 'sedation-dentistry' && $page != '0') { ?>class="live"<?php } ?>><div class="nav-link"><span class="text-nav-bar">Sedation Dentistry</span></div></a>
				<li class="px1300"><a href="<?= $urlRoot; ?>nti/" <?php if ($page == 'nti' && $page != '0') { ?>class="live"<?php } ?>><div class="nav-link"><span class="text-nav-bar">TMJ & Headache Pain Relief</span></div></a>
				<li class="px1640"><a href="<?= $urlRoot; ?>tap-appliance/" <?php if ($page == 'tap' && $page != '0') { ?>class="live"<?php } ?>><div class="nav-link"><span class="text-nav-bar">Sleep Apnea & Snoring Relief</span></div></a>
				<li class="px1920"><a href="<?= $urlRoot; ?>natural-looking-cosmetic-dentistry/" <?php if ($page == 'natural-looking-cosmetic-dentistry' && $page != '0') { ?>class="live"<?php } ?>><div class="nav-link"><span class="text-nav-bar">Natural-looking Cosmetic Dentistry</span></div></a>
				<li class="px2200"><a href="<?= $urlRoot; ?>minimally-invasive-dentistry/" <?php if ($page == 'minimally-invasive-dentistry' && $page != '0') { ?>class="live"<?php } ?>><div class="nav-link"><span class="text-nav-bar">Minimally-invasive Dentistry</span></div></a>				
			</ul>
		</nav>
		<div id="sidr" style="display:none;">
			<ul>
				<?php if ($page != 'home') { ?><li><a href="<?= $urlRoot; ?>">Home</a><?php } ?>
				<li><a href="<?= $urlRoot; ?>about.php" <?php if ($page == 'about' && $page != '0') { ?>class="active"<?php } ?>>About Us</a>
				<li><a href="<?= $urlRoot; ?>contact.php" <?php if ($page == 'contact' && $page != '0') { ?>class="active"<?php } ?>>Contact Us</a>
				<li><a href="<?= $urlRoot; ?>blog/" <?php if ($page == 'blog' && $page != '0') { ?>class="active"<?php } ?>>Blog</a>
				<li><a href="<?= $urlRoot; ?>products-and-services/" <?php if ($page == 'products-and-services' && $page != '0') { ?>class="active"<?php } ?>>Explore Our Products &#38; Services</a>
				<li><a href="<?= $urlRoot; ?>invisalign/" <?php if ($page == 'invisalign' && $page != '0') { ?>class="active"<?php } ?>>Invisalign</a>
				<ul>
					<li><a href="<?= $urlRoot; ?>invisalign-teen/" <?php if ($page == 'invisalign-teen' && $page != '0') { ?>class="active"<?php } ?>>Invisalign for Teens</a>
					<li><a href="<?= $urlRoot; ?>invisalign-military/" <?php if ($page == 'invisalign-military' && $page != '0') { ?>class="active"<?php } ?>>Invisalign Military Discount</a>
				</ul>				
				<li><a href="<?= $urlRoot; ?>smile-makeover/" <?php if ($page == 'smile-makeover' && $page != '0') { ?>class="active"<?php } ?>>Smile Makeovers</a>
				<li><a href="<?= $urlRoot; ?>sedation-dentistry/" <?php if ($page == 'sedation' && $page != '0') { ?>class="active"<?php } ?>>Sedation Dentistry</a>
				<li><a href="<?= $urlRoot; ?>pain-relief/" <?php if ($page == 'pain-relief' && $page != '0') { ?>class="active"<?php } ?>>Pain Relief</a>
				<ul>
					<li><a href="<?= $urlRoot; ?>nti/" <?php if ($page == 'nti' && $page != '0') { ?>class="active"<?php } ?>>NTI Mouth Guard</a>
					<ul>
						<li><a href="<?= $urlRoot; ?>tmj/" <?php if ($page == 'tmj' && $page != '0') { ?>class="active"<?php } ?>>TMJ Relief</a>
						<li><a href="<?= $urlRoot; ?>headache/" <?php if ($page == 'headache' && $page != '0') { ?>class="active"<?php } ?>>Headache Relief</a>
					</ul>
					<li><a href="<?= $urlRoot; ?>tap-appliance/" <?php if ($page == 'tap' && $page != '0') { ?>class="active"<?php } ?>>TAP Appliance</a>
					<ul>
						<li><a href="<?= $urlRoot; ?>sleep-apnea/" <?php if ($page == 'sleep-apnea' && $page != '0') { ?>class="active"<?php } ?>>Sleep Apnea Relief</a>
						<li><a href="<?= $urlRoot; ?>snoring/" <?php if ($page == 'snoring' && $page != '0') { ?>class="active"<?php } ?>>Stop Snoring</a>
					</ul>
				</ul>
				<li><a href="<?= $urlRoot; ?>dental-implants/" <?php if ($page == 'implants' && $page != '0') { ?>class="active"<?php } ?>>Dental Implants</a>
				<li><a href="<?= $urlRoot; ?>natural-looking-cosmetic-dentistry/" <?php if ($page == 'natural-looking-cosmetic-dentistry' && $page != '0') { ?>class="active"<?php } ?>>Natural-looking Cosmetic Dentistry</a>
				<ul>
					<li><a href="<?= $urlRoot; ?>tooth-colored-fillings/" <?php if ($page == 'fillings' && $page != '0') { ?>class="active"<?php } ?>>Tooth-colored Fillings</a>
					<li><a href="<?= $urlRoot; ?>dental-bonding/" <?php if ($page == 'bonding' && $page != '0') { ?>class="active"<?php } ?>>Dental Bonding</a>
					<li><a href="<?= $urlRoot; ?>crowns-and-onlays/" <?php if ($page == 'crowns-onlays-inlays' && $page != '0') { ?>class="active"<?php } ?>>Crowns and Onlays</a>
					<li><a href="<?= $urlRoot; ?>porcelain-veneers/" <?php if ($page == 'veneers' && $page != '0') { ?>class="active"<?php } ?>>Porcelain Veneers</a>
					<li><a href="<?= $urlRoot; ?>laser-gum-contouring-surgery/" <?php if ($page == 'gingivectomy' && $page != '0') { ?>class="active"<?php } ?>>Laser Gum Contouring Surgery</a>
					<li><a href="<?= $urlRoot; ?>tooth-reshaping-and-contouring/" <?php if ($page == 'enameloplasty' && $page != '0') { ?>class="active"<?php } ?>>Tooth Reshaping and Contouring</a>
					<li><a href="<?= $urlRoot; ?>professional-teeth-whitening/" <?php if ($page == 'whitening' && $page != '0') { ?>class="active"<?php } ?>>Professional Teeth Whitening</a>
				</ul>
				<li><a href="<?= $urlRoot; ?>complete-and-partial-dentures/" <?php if ($page == 'dentures' && $page != '0') { ?>class="active"<?php } ?>>Complete and Partial Dentures</a>
				<li><a href="<?= $urlRoot; ?>minimally-invasive-dentistry/" <?php if ($page == 'minimally-invasive-dentistry' && $page != '0') { ?>class="active"<?php } ?>>Minimally-invasive Dentistry</a>
				<li><a href="<?= $urlRoot; ?>preventive-dentistry/" <?php if ($page == 'preventive-dentistry' && $page != '0') { ?>class="active"<?php } ?>>Preventive Dentistry</a>
				<li><a href="<?= $urlRoot; ?>oral-hygiene/" <?php if ($page == 'hygiene' && $page != '0') { ?>class="active"<?php } ?>>Oral Hygiene Care</a>
				<ul>
					<li><a href="<?= $urlRoot; ?>oral-hygiene-products/" <?php if ($page == 'oral-hygiene-products' && $page != '0') { ?>class="active"<?php } ?>>Oral Hygiene Products</a>
					<li><a href="<?= $urlRoot; ?>oral-hygiene-tips/" <?php if ($page == 'oral-hygiene-tips' && $page != '0') { ?>class="active"<?php } ?>>Oral Hygiene Tips</a>
					<li><a href="<?= $urlRoot; ?>professional-teeth-cleanings-and-checkups/" <?php if ($page == 'cleanings-and-checkups' && $page != '0') { ?>class="active"<?php } ?>>Teeth Cleanings and Checkups</a>
				</ul>
				<li><a href="<?= $urlRoot; ?>patient-resources/" <?php if ($page == 'patient-resources' && $page != '0') { ?>class="active"<?php } ?>>Patient Resources</a>
				<ul>
					<li><a href="<?= $urlRoot; ?>faq/" <?php if ($page == 'faq' && $page != '0') { ?>class="active"<?php } ?>>FAQ</a>
					<li><a href="<?= $urlRoot; ?>dental-finance-options/" <?php if ($page == 'finance-options' && $page != '0') { ?>class="active"<?php } ?>>Finance Options</a>
					<li><a href="<?= $urlRoot; ?>dental-insurance-advice/" <?php if ($page == 'insurance' && $page != '0') { ?>class="active"<?php } ?>>Dental Insurance Advice</a>
				</ul>
				<li><a href="<?= $urlRoot; ?>forms/" <?php if ($page == 'forms' && $page != '0') { ?>class="active"<?php } ?>>Patient Forms</a>
				<ul>
					<li><a href="<?= $urlRoot; ?>patient-resources/forms/new-patient.pdf">New Patient Form</a></li>
					<li><a href="<?= $urlRoot; ?>patient-resources/forms/health-history.pdf">Health History Form</a></li>
					<li><a href="<?= $urlRoot; ?>feedback/" <?php if ($page == 'feedback' && $page != '0') { ?>class="active"<?php } ?>>Send Feedback</a></li>
				</ul>
				<li>&nbsp;</li>
			</ul>
		</div>
</div>

<div class="top-bar">
		<?php if ($page != 'home') { ?><a href="<?= $urlRoot; ?>" style="text-decoration:none;"><?php } ?>
		<div class="logo-box">
			<img class="fill" src="<?= $urlRoot; ?>images/complete-dental-health-logo.png" alt="complete dental health logo"/>
		</div>
		<div class="company-box">
			<div class="company">
				<span class="text-light">Complete&#8201;</span><span class="text-dark-blue"><b>Dental</b></span><span class="text-light">&#8201;Health</span>
			</div>
			<div class="tagline">
				Office of Timothy N. Collins, D.D.S.
			</div>
		</div>
		<?php if ($page != 'home') { ?></a><?php } ?>
		<div class="call-box">
			<div class="call">
				<span class="text-brown text-fancy">New Patients Always Welcome</span>
			</div>
			<div class="phone">
				<span class="text-blue">619.295.2202</span>
			</div>
		</div>
</div>
<div style="clear:both;">&nbsp;</div>