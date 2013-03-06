<?php // site_settings.php

require_once 'sanitize.php';

$devteam = "The Fellowship of the Code";
$contactemail = "whoiskevinrich@gmail.com";
$copyright_holder = "The Professional Professionals";
$site_name = "Course Planner";
$db_base_name = 'CS361_CoursePlanner_';
$css_style = ('<head><link href="../css/site.css" rel="stylesheet" type="text/css" media="all"></head>');

$usertable = "$db_base_name" . "user";
$coursetable = "$db_base_name" . "course";
$majortable = "$db_base_name" . "major";
$sectiontable = "$db_base_name" . "section";
$planstable = "$db_base_name" . "plans";
$optionstable = "$db_base_name" . "options";

?>
