<?php // newuser.php

include_once 'site_settings.php';
include_once 'server_connect.php';
include_once 'user.php';
include_once 'sanitize.php';

if(isset($_POST['submit'])){
	echo "Sanitizing name...";
	if(isset($_POST['name'])){
		$name_field = sanitizeString($_POST['name']);
		echo "name sanitized <br />";
	} else {
		echo "ERROR: name string not set <br />";
	}
}

function sanitize($field){
	echo "Sanitizing " . $field;
	if(isset($_POST[$field])){
		
	}
}


?>