<?php
function curPageName() {
	return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}

function curPageURL() {
	$pageURL = 'http';
	if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
		$pageURL .= "://";
	if ($_SERVER["SERVER_PORT"] != "80") {
		$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	} else {
		$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	}
	return $pageURL;
}

/*Set the Base Path for the Domain*/
function curRootURL() {
	if (substr_count($_SERVER["SERVER_NAME"], "completedentalhealth.net") != 0) {
		if (substr_count($_SERVER["SERVER_NAME"], "canary") != 0) {
			$urlRoot = "http://www.completedentalhealth.net/canary/";
		} elseif (substr_count($_SERVER["SERVER_NAME"], "office") != 0) {
			$urlRoot = "http://www.completedentalhealth.net/office/";
		} else {
			$urlRoot = "http://www.completedentalhealth.net/";
		}
	} else {
		$urlRoot = "http://127.0.0.1:3128/cdh/";
	}
	return $urlRoot;
}
?>