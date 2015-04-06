<?php
	require '../../inc/utility.php';
	$urlRoot = curRootURL();
	$page = 'forms-feedback';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Send Us a Message | Complete Dental Health</title>
	<meta name="description" content="Use the form below to send your questions and comments directly to Dr. Collins. Sections marked with an asterisk (*) are required.">
	<meta name="keywords" content="complete dental health, contact complete dental health, complete dental health contact form, complete dental health message, complete dental health send message">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<base href="<?= $urlRoot; ?>" />	
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="canonical" href="<?= $urlRoot; ?>feedback/">	
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
	<?php include '../../inc/header.php'; ?>
</header>

<div class="content">
	<div class="article">
		<div class="box-wide show-640 hide-900 hide-1200"></div>
		<div class="box-wide">
			<div class="box ratio2_1 opacity-70">
				<div class="box-content">
					<img class="fill" src="images/your-smile-is-our-reward-mary.jpg" alt="sedation dentistry page, complete dental health in hillcrest san diego, dr tim collins dds"/>
				</div>
			</div>
		</div>
		<div class="box-wide">		
			<h1 class="text-align-left">Questions? Comments? Let Us Know</h1>
			<span class="text-micro text-ghost">By <a rel="author" target=_"blank" href="about.php">Complete Dental Health</a></span>
			<p>Use the form below to send your questions and comments directly to Dr. Collins. Sections marked with an asterisk (<span class="text-red">*</span>) are required.<br /><br /></p>
			<form method="post" action="patient-resources/forms/send_feedback.php">
				<div class="box-wide bg-light-blue text-align-left">
				<p><b>Name<span class="text-red">*</span></b><br /></p>
				<p>First Name <input id="firstName" class="form-input-narrow" type="text" name="first_name"></p>
				<p>Last Name <input id="lastName" class="form-input-narrow" type="text" name="last_name"></p>
				<p><b>Email<span class="text-red">*</span></b><br /><input id="email" class="form-input-wide" type="text" name="email"></p>
				<p><b>Phone<span class="text-red">*</span></b><br /><input id="phone" class="form-input-narrow" type="text" name="phone"></p>
				<p><b>Message</b><br /><textarea class="form-input-wide" id="comments" name="comments" rows=15 wrap=virtual></textarea></p>
				<p id="error" class="text-red">Please fill out all required fields.</p>
                <p><input id="submit" type="submit" name="submit" value="Send Message to Dr. Collins"></p>
				</div>
			</form>
			<p class="text-micro">To protect your privacy, we ask that you do not send usernames, passwords, or other protected account information using this form.</p>
		</div>
	</div>
</div>

<footer>
	<?php include '../../inc/footer.php'; ?>
</footer>


<script src="javascripts/jquery-1.11.1.min.js"></script>
<script src="javascripts/jquery.sidr.min.js"></script>
<script src="javascripts/cdh.utility.js"></script>
<script>
    $(document).ready(function () {
        $('#error').hide();
        $('#submit').on('click', function(e){
            var t = isFormValid();
            if (!t) {
                e.preventDefault();
                $('#error').show();
                return;
            }
        });
    });
    function isFormValid() {

		var isNameValid = false,
		    isContactValid = false;

		if (isName($('#firstName').val()) || isName($('#lastName').val())) {
			isNameValid = true;
		}
		
		if (isEmail($('#email').val()) || isPhone($('#phone').val())) {
			isContactValid = true;
		}
		
		if (isNameValid && isContactValid) {
		    // enable send button
			return true;
		}

		function isEmail(testValue) {
		    var regexp = /[\w\.\_\-\+]+@[\w\-]+(\.\w{2,4})+/;
			return regexp.test(testValue);
		}

		function isPhone(testValue) {
		    var regexp = /(\s*)?((\+)?\d*)?(\s*)?(\()?(\s*)?(\d{3})(\s*)?(\)|\-|\.)?(\s*)?(\d{3})(\s*)?(\)|\-|\.)?(\s*)?(\d{4})(\s*)?/;
			return regexp.test(testValue);
		}

		function isName(testValue) {
		    if (testValue) {
			    return true;
			}
			return false;
		}
	};
</script>


</body>
</html>