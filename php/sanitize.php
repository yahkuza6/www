<?php // sanitize.php
/*
  Strips html formatting from input to protect against scripting attacks.
*/
function sanitizeString($var){
	if(get_magic_quotes_gpc()) $var = stripslashes($var);
	$var = htmlentities($var);
	$var = strip_tags($var);
	return $var;
}

/*
  Strips SQL and HTML formatting from input to protect against attacks.
*/
function sanitizeMySQL($var){
	$var = mysql_real_escape_string($var);
	$var = sanitizeString($var);
	return $var;
}
?>