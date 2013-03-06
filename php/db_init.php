<?php // db_init.php
/*
 Written by Kevin Rich
 Feb 2013 for CS494: Web Development
 Oregon State University
 
 Purpose: Clears database and creates new table in it's place 
 */

//Connect to Database
require_once 'site_settings.php';
require_once 'server_connect.php';

/* Let's add a little style to the party */
echo $css_style;

/* informational */
echo $_SERVER['PHP_SELF'];
echo "<br /><br />";

echo 'Successfully connected to database!';
echo "<br /><br />";

/* Drop Tables and Create the table over again */

/* user table */
$table = $usertable;
dropTable($table);
$query = ("CREATE TABLE $table(
				userID INT NOT NULL AUTO_INCREMENT,
				name VARCHAR(64) NOT NULL, 
				password VARCHAR(64) NOT NULL,
				email VARCHAR(64) NOT NULL,
				major VARCHAR(64) NOT NULL,
				plans VARCHAR(64) NOT NULL,
				compCourses VARCHAR(64) NOT NULL,
				othCourses VARCHAR(64) NOT NULL,
				PRIMARY KEY(userID)
				)
			");
queryTable($table, $query);

/* course Table */
$table = $coursetable;
dropTable($table);
$query = ("CREATE TABLE $table(
				courseID INT NOT NULL AUTO_INCREMENT,
				name VARCHAR(64) NOT NULL, 
				rereqs VARCHAR(64) NOT NULL,
				sections VARCHAR(64) NOT NULL,
				ratings VARCHAR(64) NOT NULL,
				PRIMARY KEY(courseID)
				)
			");
queryTable($table, $query);

/* major Table */
$table = $majortable;
dropTable($table);
$query = ("CREATE TABLE $table(
				majorID INT NOT NULL AUTO_INCREMENT,
				name VARCHAR(64) NOT NULL, 
				reqdCourses VARCHAR(64) NOT NULL,
				PRIMARY KEY(majorID)
				)
			");
queryTable($table, $query);

/* section Table */
/* SQL TIME REF: http://dev.mysql.com/doc/refman/5.0/en/time.html */
$table = $sectiontable;
dropTable($table);
$query = ("CREATE TABLE $table(
				sectionID INT NOT NULL AUTO_INCREMENT,
				courseID INT NOT NULL, 
				room VARCHAR(64) NOT NULL,
				startTime TIME NOT NULL,
				endTime TIME NOT NULL,
				term VARCHAR(64) NOT NULL,
				PRIMARY KEY(sectionID)
				)
			");
queryTable($table, $query);

/* plans Table */
$table = $planstable;
dropTable($table);
$query = ("CREATE TABLE $table(
				planID INT NOT NULL AUTO_INCREMENT,
				name VARCHAR(64) NOT NULL,
				sections VARCHAR(64) NOT NULL,
				PRIMARY KEY(planID)
				)
			");
queryTable($table, $query);

/* options Table */
$table = $optionstable;
dropTable($table);
$query = ("CREATE TABLE $table(
				optionsID INT NOT NULL AUTO_INCREMENT,
				userID VARCHAR(64) NOT NULL,
				creditsPerTerm INT NOT NULL,
				timeOfDay VARCHAR(64) NOT NULL,
				PRIMARY KEY(optionsID)
				)
			");
queryTable($table, $query);

//Close Connection
echo mysql_error();
echo "<br />";
echo ("Closing Connection to db server <br />");
mysql_close($mysql_handle);

/* -------------- FUNCTIONS -------------------- */
/*
 * Drops the table completely. Use wisely
 */
function dropTable($table){
	echo ("Dropping " .$table. " table....");
	$query = "DROP TABLE IF EXISTS $table";
	$result = mysql_query($query);
	if (!$result){
		echo ("<div id=\"error\">failed: ".mysql_error());
	} else {
		echo ("<div id=\"success\">success");
	}
	echo '</div><br />';
}

/*
 * Queries TABLE for given table using query
 */
function queryTable($table, $query){
	echo ("Trying Query: <br /> " . $query );
	$result = mysql_query($query);
	if (!$result){
		echo ("<div id=\"error\">failed: ".mysql_error());
	} else {
		echo ("<div id=\"success\">success");
	}
	echo "</div><br />";
}

?>
