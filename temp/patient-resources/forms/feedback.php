<?php
	$page = 'forms-feedback';
?>
<!DOCTYPE html>
<html>
<head>
	<title>San Diego General and Cosmetic Dentistry &#8211; Invisalign and Other Services | Complete Dental Health</title>
	<meta name="description" content="At our San Diego cosmetic dentistry practice, our skilled dentists offer Invisalign&#174; and other quality treatments to help you achieve your smile goals.">
	<meta name="keywords" content="san diego, cosmetic dentistry, invisalign, porcelain veneers, dental implants, tooth whitening, teeth whitening, tmj treatment, laser dentistry, sedation dentist, dr tim collins, complete dental health, hillcrest">
	<link rel="stylesheet" type="text/css" href="../../cdh-master-style.css">
</head>

<body>

<header>
	<?php include '../../inc/header.php'; ?>
</header>

<div class="thin-spacer"> </div>
<div class="spacer-bar"> </div>

<div class="detail-bar">
	<div class="detail-content">
		<?php include '../../inc/nav-resources.php'; ?>
		<div class="right-detail-pane"> 
			<div class="spacer-bar"> </div>
			<div class="detail-spanner">
				<img src="../../images/header-bar-petco.jpg" alt="complete dental health hillcrest san diego cosmetic dentist sedation dentistry" align="center" width="100%"/>
			</div>
			<div class="spacer-bar"> </div>
			<div class="right-detail-pane-header"> 
				<p class="text-section-title2" style="text-align:left;">Questions? Comments? Let us Know!</p>
			</div>
			<div class="spacer-bar"> </div>
			<div class="right-detail-pane-content"> 
				<div style="text-align:left;">
					<h1 class="text-section-body">Use the form below to send your questions and comments directly to Dr. Collins. Sections marked with an asterisk (<span class="text-red">*</span>) are required.<br /><br /></h1>
					<form method="post" action="send_feedback.php">
						<p class="text-section-body"><b>Name<span class="text-red">*</span></b><br /></p>
						<p class="text-section-body">First Name <input type="text" name="first_name" size=30> Last Name <input type="text" name="last_name" size=30></p>
						<br />
						<p class="text-section-body"><b>Email<span class="text-red">*</span></b><br /><input type="text" name="email" size=60></p>
						<br />
						<p class="text-section-body"><b>Phone<span class="text-red">*</span></b><br /><input type="text" name="phone" size=30></p>
						<br />
						<p class="text-section-body"><b>Message</b><br /><textarea name="comments" cols=75 rows=15 wrap=virtual></textarea></p>
						<br />
						<p class="text-section-body"><input type="submit" name="submit" value="Send Message to Dr. Collins"></p>
					</form>
				</div>
			</div>
			<div class="spacer-bar"> </div>
		</div>
	</div>
</div>

<div class="spacer-bar"> </div>

<footer>
	<?php include '../../inc/footer.php'; ?>
</footer>

</body>
</html>