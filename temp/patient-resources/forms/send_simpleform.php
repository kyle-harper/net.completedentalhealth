<?
if (($_POST[sender_name] == "") ||
	($_POST[sender_email] == "") ||
	($_POST[message] == "")) {
	header("Location: feedback.html");
	exit;
}
$msg = "EMAIL SENT FROM WWW SITE\n";
$msg .= "Sender's Name:\t$_POST[sender_name]\n";
$msg .= "Sender's Email:\t$_POST[sender_email]\n";
$msg .= "Message:\t$_POST[message]\n";
$to = "kyle.p.harper@gmail.com";
$subject = "Web Site Feedback";
$mailheaders = "From: Complete Dental Health Online <info@completedentalhealth.net>\n";
$mailheaders .= "Reply-To: $_POST[sender_email]\n";
mail($to, $subject, $msg, $mailheaders);
?>


<html>
<head>
<title>Thank you for your feedback!</title>
</head>
<body>
<h1>The Following Feedback Information has been Sent:</h1>
<p><strong>Your Name:</strong><br>
<? echo "$_POST[sender_name]"; ?>
<p><strong>Your Emal Address:</strong><br>
<? echo "$_POST[sender_email]"; ?>
<p><strong>Message:</strong><br>
<? echo "$_POST[message]"; ?>
</body>
</html>