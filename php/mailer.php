<?php // mailer.php
include_once 'sanitize.php'; /* to sanitize inputs */
include_once 'site_settings.php'; /* One place for literals */

if(isset($_POST['submit'])){
	echo "Sanitizing name...";
	if(isset($_POST['name'])){
		$name_field = sanitizeString($_POST['name']);
		echo "name sanitized <br />";
	} else {
		echo "ERROR: name string not set <br />";
	}
	
	if(isset($_POST['email'])){
		$email_field = sanitizeString($_POST['email']);
		echo "email sanitized <br />";
	} else {
		echo "ERROR: email string not set <br />";
	}
	
	if(isset($_POST['message'])){
		$message = sanitizeString($_POST['message']);
		echo "message sanitized <br />";
	} else {
		echo "ERROR: message string not set <br />";
	}
	
	$to=$contact_email; /* From site_settings.php */
	$subject = $site_name + " Contact Form";
	
	$body = "From: $name_field\n Email: $email_field\n Message:\n $message";
		
	mail($to, $subject, $body);
	echo "Email has been sent!";	
} else {
	echo "Script has received no message to forward.";
}

?>
