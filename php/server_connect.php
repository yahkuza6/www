<?php
/*
 Filename: serv.php
 Written by Kevin Rich
 Feb 2013 for CS494: Web Development
 Oregon State University
 
 Purpose: provides server credentials so site can utilize mySQL database at OSU 
 */
ini_set('display_errors', 'On');

$dbhost = 'oniddb.cws.oregonstate.edu';
$dbname = 'richk-db';
$dbuser = 'richk-db';
$dbpass = 'K8WLrPLL6YtpKseq';

$mysql_handle = mysql_connect($dbhost, $dbuser, $dbpass)
	or die("Error connecting to database server");

mysql_select_db($dbname, $mysql_handle)
	or die("Error selecting database: $dbname");
		
mysql_error();
?>