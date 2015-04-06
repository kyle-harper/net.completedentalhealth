<?php
include 'utility.php';
//determine root URL string for header links
$myURL = curPageURL();
if (substr($myURL, 7, 9) == "localhost") {$myRoot = "http://localhost:3128/cdh/";} 
else {$myRoot = "http://www.completedentalhealth.net/";}
?>
<div class="spacer-bar"></div>
<div class="header-bar">
	<div class="header-content">
		<div class="header-content-logo">
			<span></span>
			<?php if ($page == 'home') { ?>
				<img src="<?= $myRoot; ?>images/logo.gif" alt="complete dental health san diego cosmetic dentist dr. timothy collins" width="95"/>
			<?php } else { ?>
				<a href="<?= $myRoot; ?>"><img src="<?= $myRoot; ?>images/logo.gif" alt="complete dental health san diego cosmetic dentist dr. timothy collins" width="95"/></a>
			<?php } ?>
		</div>
		<div class="header-content-title">
			<div class="header-content-title-main">
				<h1 style="text-align:right;" class="text-header">Complete&#8201;<span class="text-header-contrast">Dental</span>&#8201;Health</h1>
			</div>
		<div class="header-content-title-sub">
				<h2 style="text-align:right;" class="text-header-sub">Office of Timothy N. Collins, D.D.S.</h2>
			</div>
		</div>
		<div class="header-content-location">
			<div class="header-content-phone">
				<span></span>
				<h1 class="text-section-title1a">619.&#8201;295<span style="display:none;">-</span>.&#8201;2202</h1>
			</div>
			<div class="header-content-address">
				<span></span>
				<p class="text-general">3808 Front Street</p>
				<p class="text-general">San Diego, California 92103</p>
			</div>
		</div>
	</div>
	<div class="spacer-bar"></div>
	<div id="header-nav" class="header-content-nav">
		<?php if ($page != 'home') { ?>
			<div class="header-content-nav-link">
				<a href="<?= $myRoot; ?>index.php"><p class="text-nav-bar">Home</p></a>
			</div>
		<?php } ?>
		<div class="header-content-nav-link">
			<?php if ($page == 'about') { ?>
				<p class="text-nav-bar-live">About Us</p>
			<?php } else { ?>
				<a href="<?= $myRoot; ?>about.php"><p class="text-nav-bar">About Us</p></a>
			<?php } ?>
		</div>
		<div class="header-content-nav-link">
			<?php if ($page == 'products-and-services') { ?>
				<p class="text-nav-bar-live">Our Services</p>
			<?php } elseif ($rootPage == 'products-and-services') { ?>
				<a href="<?= $myRoot; ?>products-and-services/index.php"><p class="text-nav-bar-live">Our Services</p></a>
			<?php } else { ?>
				<a href="<?= $myRoot; ?>products-and-services/index.php"><p class="text-nav-bar">Our Services</p></a>
			<?php } ?>
		</div>
		<div class="header-content-nav-link">
			<?php if ($page == 'contact') { ?>
				<p class="text-nav-bar-live">Contact Us</p>
			<?php } else { ?>
				<a href="<?= $myRoot; ?>contact.php"><p class="text-nav-bar">Contact Us</p></a>
			<?php } ?>
		</div>
		<div class="header-content-nav-link">
			<?php if ($page == 'patient-resources') { ?>
				<p class="text-nav-bar-live">Patient Resources</p>
			<?php } elseif ($page == 'faq') { ?>
				<a href="<?= $myRoot; ?>patient-resources/index.php"><p class="text-nav-bar-live">Patient Resources</p></a>
			<?php } else { ?>
				<a href="<?= $myRoot; ?>patient-resources/index.php"><p class="text-nav-bar">Patient Resources</p></a>
			<?php } ?>
		</div>
		<div class="header-content-nav-link">
			<?php if ($page == 'faq') { ?>
				<p class="text-nav-bar-live">FAQ</p>
			<?php } else { ?>
				<a href="<?= $myRoot; ?>patient-resources/faq.php"><p class="text-nav-bar">FAQ</p></a>
			<?php } ?>
		</div>
	</div>
</div>