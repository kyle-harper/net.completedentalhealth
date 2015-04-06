<?php
//include 'utility.php';

//determine root URL string for header links
$myURL = curPageURL();
if (substr($myURL, 7, 9) == "localhost") {$myRoot = "http://localhost:3128/cdh/patient-resources/";} 
else {$myRoot = "http://www.completedentalhealth.net/patient-resources/";}

?>
<div class="left-menu-bar">
	<div class="left-menu-bar-item">
		<?php if ($page == 'faq') { ?>
			<p class="text-nav-bar-live">FAQ</p>
		<?php } else { ?>
			<a href="<?= $myRoot; ?>faq.php"><p class="text-nav-bar">FAQ</p></a>
		<?php } ?>
	</div>
	<div class="left-menu-thin-spacer"></div>
	<div class="left-menu-bar-item">
		<?php if ($page == 'finance-options') { ?>
			<p class="text-nav-bar-live">Finance Options</p>
		<?php } else { ?>
			<a href="<?= $myRoot; ?>finance-options.php"><p class="text-nav-bar">Finance Options</p></a>
		<?php } ?>
	</div>
	<div class="left-menu-thin-spacer"></div>
	<div class="left-menu-bar-item">
		<?php if ($page == 'news') { ?>
			<p class="text-nav-bar-live">What&#146;s New</p>
		<?php } else { ?>
			<a href="<?= $myRoot; ?>news.php"><p class="text-nav-bar">What&#146;s New</p></a>
		<?php } ?>
	</div>
	<div class="left-menu-thin-spacer"></div>
	<div class="left-menu-bar-item">
		<?php if ($page == 'tips') { ?>
			<p class="text-nav-bar-live">Dental Health Tips</p>
		<?php } else { ?>
			<a href="<?= $myRoot; ?>tips.php"><p class="text-nav-bar">Dental Health Tips</p></a>
		<?php } ?>
	</div>
	<div class="left-menu-thin-spacer"></div>
	<div class="left-menu-bar-item">
		<?php if ($page == 'forms-feedback') { ?>
			<p class="text-nav-bar-live">Send Us a Message</p>
		<?php } else { ?>
			<a href="<?= $myRoot; ?>forms/feedback.php"><p class="text-nav-bar">Send Us a Message</p></a>
		<?php } ?>
	</div>
	<div class="left-menu-thin-spacer"></div>
	<div class="left-menu-bar-item">
		<?php if ($page == 'forms') { ?>
			<p class="text-nav-bar-live">Fill Out Forms</p>
		<?php } else { ?>
			<a href="<?= $myRoot; ?>forms/index.php"><p class="text-nav-bar">Fill Out Forms</p></a>
		<?php } ?>
		<div class="left-menu-thinner-spacer"></div>
		<div class="left-menu-bar-sub-item">
			<a target="_blank" href="<?= $myRoot; ?>forms/new-patient.pdf"><p class="text-nav-bar-sub">New Patient Form</p></a>
		</div>
		<br class="clearboth"/><div class="left-menu-thinner-spacer"></div>
		<div class="left-menu-bar-sub-item">
			<a target="_blank" href="<?= $myRoot; ?>forms/health-history.pdf"><p class="text-nav-bar-sub">Health History Form</p></a>
		</div>
	</div>
	<div class="left-menu-thin-spacer"></div>
	<div class="left-menu-bar-item">
		<?php if ($page == 'glossary') { ?>
			<p class="text-nav-bar-live">Glossary of Terms</p>
		<?php } else { ?>
			<a href="<?= $myRoot; ?>glossary.php"><p class="text-nav-bar">Glossary of Terms</p></a>
		<?php } ?>
	</div>
</div>