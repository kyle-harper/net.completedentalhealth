<?php
//include 'utility.php';

//determine root URL string for header links
$myURL = curPageURL();
if (substr($myURL, 7, 9) == "localhost") {$myRoot = "http://localhost:3128/cdh/products-and-services/";} 
else {$myRoot = "http://www.completedentalhealth.net/products-and-services/";}

?>
<div class="left-menu-bar">
	<div class="left-menu-bar-item">
		<?php if ($page == 'invisalign') { ?>
			<p class="text-nav-bar-live">Invisalign<span class="text-sup">&#174;</span></p>
		<?php } elseif ($page != 'invisalign' && substr($page, 0, 10) == 'invisalign') { ?>
			<a href="<?= $myRoot; ?>cosmetic/invisalign/index.php"><p class="text-nav-bar-live">Invisalign<span class="text-sup">&#174;</span></p></a>
		<?php } else { ?>
			<a href="<?= $myRoot; ?>cosmetic/invisalign/index.php"><p class="text-nav-bar">Invisalign<span class="text-sup">&#174;</span></p></a>
		<?php } ?>
	</div>
	<div class="left-menu-thin-spacer"></div>
	<div class="left-menu-bar-item">
		<?php if ($page == 'whitening') { ?>
			<p class="text-nav-bar-live">Teeth Whitening</p>
		<?php } else { ?>
			<a href="<?= $myRoot; ?>cosmetic/whitening.php"><p class="text-nav-bar">Teeth Whitening</p></a>
		<?php } ?>
	</div>
	<div class="left-menu-thin-spacer"></div>
	<div class="left-menu-bar-item">
		<?php if ($page == 'cosmetic-restorations') { ?>
			<p class="text-nav-bar-live">Cosmetic Restorations</p>
		<?php } else { ?>
			<a href="<?= $myRoot; ?>cosmetic/index.php"><p class="text-nav-bar">Cosmetic Restorations</p></a>
		<?php } ?>
		<div class="left-menu-thinner-spacer"></div>
		<div class="left-menu-bar-sub-item">
			<?php if ($page == 'fillings') { ?>
				<p class="text-nav-bar-sub-live">Natural Restorations<br />(Tooth-colored Fillings)</p>
			<?php } else { ?>
				<a href="<?= $myRoot; ?>cosmetic/fillings.php"><p class="text-nav-bar-sub">Natural Restorations<br />(Tooth-colored Fillings)</p></a>
			<?php } ?>
		</div>
		<br class="clearboth"/><div class="left-menu-thinner-spacer"></div>
		<div class="left-menu-bar-sub-item">
			<?php if ($page == 'crowns-onlays-inlays') { ?>
				<p class="text-nav-bar-sub-live">Crowns, Onlays, and Inlays</p>
			<?php } else { ?>
				<a href="<?= $myRoot; ?>cosmetic/crowns-onlays-inlays.php"><p class="text-nav-bar-sub">Crowns, Onlays, and Inlays</p></a>
			<?php } ?>
		</div>
		<br class="clearboth"/><div class="left-menu-thinner-spacer"></div>
		<div class="left-menu-bar-sub-item">
			<?php if ($page == 'bonding') { ?>
				<p class="text-nav-bar-sub-live">Dental Bonding</p>
			<?php } else { ?>
				<a href="<?= $myRoot; ?>cosmetic/bonding.php"><p class="text-nav-bar-sub">Dental Bonding</p></a>
			<?php } ?>
		</div>
		<br class="clearboth"/><div class="left-menu-thinner-spacer"></div>
		<div class="left-menu-bar-sub-item">
			<?php if ($page == 'veneers') { ?>
				<p class="text-nav-bar-sub-live">Porcelain Veneers</p>
			<?php } else { ?>
				<a href="<?= $myRoot; ?>cosmetic/veneers.php"><p class="text-nav-bar-sub">Porcelain Veneers</p></a>
			<?php } ?>
		</div>
		<br class="clearboth"/><div class="left-menu-thinner-spacer"></div>
		<div class="left-menu-bar-sub-item">
			<?php if ($page == 'dentures') { ?>
				<p class="text-nav-bar-sub-live">Complete and Partial Dentures</p>
			<?php } else { ?>
				<a href="<?= $myRoot; ?>cosmetic/dentures.php"><p class="text-nav-bar-sub">Complete and Partial Dentures</p></a>
			<?php } ?>
		</div>
		<br class="clearboth"/><div class="left-menu-thinner-spacer"></div>
		<div class="left-menu-bar-sub-item">
			<?php if ($page == 'implants') { ?>
				<p class="text-nav-bar-sub-live">Dental Implants</p>
			<?php } else { ?>
				<a href="<?= $myRoot; ?>cosmetic/implants.php"><p class="text-nav-bar-sub">Dental Implants</p></a>
			<?php } ?>
		</div>
	</div>
	<div class="left-menu-thin-spacer"></div>
	<div class="left-menu-bar-item">
		<?php if ($page == 'sedation') { ?>
			<p class="text-nav-bar-live">Sedation Dentistry</p>
		<?php } else { ?>
			<a href="<?= $myRoot; ?>sedation/index.php"><p class="text-nav-bar">Sedation Dentistry</p></a>
		<?php } ?>
	</div>
	<div class="left-menu-thin-spacer"></div>
	<div class="left-menu-bar-item">
		<?php if ($page == 'prevention') { ?>
			<p class="text-nav-bar-live">Prevention</p>
		<?php } else { ?>
			<a href="<?= $myRoot; ?>prevention/index.php"><p class="text-nav-bar">Prevention</p></a>
		<?php } ?>
		<div class="left-menu-thinner-spacer"></div>
		<div class="left-menu-bar-sub-item">
			<?php if ($page == 'nti') { ?>
				<p class="text-nav-bar-sub-live">TMJ Pain Relief & Tooth Protection</p>
			<?php } else { ?>
				<a href="<?= $myRoot; ?>prevention/relief/nti.php"><p class="text-nav-bar-sub">TMJ Pain Relief & Tooth Protection</p></a>
			<?php } ?>
		</div>
		<br class="clearboth"/><div class="left-menu-thinner-spacer"></div>
		<div class="left-menu-bar-sub-item">
			<?php if ($page == 'tap') { ?>
				<p class="text-nav-bar-sub-live">Sleep Apnea & Snoring Relief</p>
			<?php } else { ?>
				<a href="<?= $myRoot; ?>prevention/relief/tap.php"><p class="text-nav-bar-sub">Sleep Apnea & Snoring Relief</p></a>
			<?php } ?>
		</div>
	</div>
	<div class="left-menu-thin-spacer"></div>
	<div class="left-menu-bar-item">
		<?php if ($page == 'hygiene') { ?>
			<p class="text-nav-bar-live">Oral Hygiene</p>
		<?php } else { ?>
			<a href="<?= $myRoot; ?>prevention/cleanings-and-checkups/index.php"><p class="text-nav-bar">Oral Hygiene</p></a>
		<?php } ?>
		<div class="left-menu-thinner-spacer"></div>
		<div class="left-menu-bar-sub-item">
			<?php if ($page == 'hygiene-treatments') { ?>
				<p class="text-nav-bar-sub-live">Cleanings & Checkups</p>
			<?php } else { ?>
				<a href="<?= $myRoot; ?>prevention/cleanings-and-checkups/treatments.php"><p class="text-nav-bar-sub">Cleanings & Checkups</p></a>
			<?php } ?>
		</div>
		<br class="clearboth"/><div class="left-menu-thinner-spacer"></div>
		<div class="left-menu-bar-sub-item">
			<?php if ($page == 'hygiene-products') { ?>
				<p class="text-nav-bar-sub-live">Products</p>
			<?php } else { ?>
				<a href="<?= $myRoot; ?>prevention/cleanings-and-checkups/products.php"><p class="text-nav-bar-sub">Products</p></a>
			<?php } ?>
		</div>
	</div>
</div>