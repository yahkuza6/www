<?php

require_once 'site_settings.php';
require_once "server_connect.php";

#doc
#	classname:	Course
#	scope:		PUBLIC
#
#/doc

class Course 
{
	#	internal variables
	private $courseID, $name, $prereqs, $sections, $ratings;
	
	#	Constructor
	function __construct ($courseID, $name, $prereqs, $sections, $rating)
	{
		# code...
		$this->courseID = $courseID;
		$this->name = $name;
		$this->prereqs = $prereqs;
		$this->sections = array($sections);
		$this->rating = $rating;
	}
	###	

	function rateCourse($rating){}
	function updCourse($courses){}

}
###

?>
