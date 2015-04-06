<?php
function insertFeedback($timestamp, $first_name, $last_name, $email, $phone, $comments) {
	$con=mysqli_connect("collinsdentalc.db.10734413.hostedresource.com","collinsdentalc","Complete#3808#","collinsdentalc");
	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$sql="INSERT INTO contacts (timestamp, first_name, last_name, email, phone, comments)
		VALUES
		('$timestamp', '$first_name','$last_name','$email','$phone','$comments')";

	if (!mysqli_query($con,$sql)) {
		die('Error: ' . mysqli_error());
	}

	mysqli_close($con);
}

function mailFeedback($timestamp, $name, $email, $phone, $comments) {
	$msg = "Email sent from http://www.completedentalhealth.net \n________\n\n";
	$msg .= "Message Sent:\t$timestamp\n";
	$msg .= "Sender's Name:\t$name\n";
	$msg .= "Sender's Email:\t$email\n";
	$msg .= "Sender's Phone:\t$phone\n";
	$msg .= "\n$comments\n";
	$to = "sheenacdh@gmail.com";
	$subject = "Message From Patient";
	$mailheaders = "From: CDH Online <info@completedentalhealth.net>\n";
	$mailheaders .= "Reply-To: $email\n";
	mail($to, $subject, $msg, $mailheaders);
}
	
	function formValid() {
		return True;
	}
	
	if (formValid) {
		date_default_timezone_set('America/Los_Angeles');
		$timestamp = date("Y-m-d H:i:s T", time());
		mailFeedback($timestamp, $_POST[first_name]." ".$_POST[last_name], $_POST[email], $_POST[phone], $_POST[comments]);
		insertFeedback($timestamp, $_POST[first_name], $_POST[last_name], $_POST[email], $_POST[phone], $_POST[comments]);
	} else {
		header("Location: feedback-error.php");
		exit;
	}
	
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
				<p class="text-section-title2" style="text-align:left;">Thank You</p>
			</div>
			<div class="spacer-bar"> </div>
			<div class="right-detail-pane-content"> 
				<div style="text-align:left;">
					<h1 class="text-section-body">Thank you for your message. Dr. Collins and our professional team will be sure to contact you.</h1>
					<br />
					<p class="text-section-body"><a href="feedback.php">click here to send another message.</a></p>
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