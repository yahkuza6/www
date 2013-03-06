<?php

require_once 'site_settings.php';
require_once "server_connect.php";

#doc
#	classname:	Section
#	scope:		PUBLIC
#
#/doc

class Section 
{
	#	internal variables
	private $sectionID, $courseID, $room, $startTime, $endTime, $term;
	
	#	Constructor
	function __construct ($sectionID, $courseID, $room, $startTime, $endTime, $term)
	{
		# code...
		$this->sectionID = $sectionID;
		$this->courseID = $courseID;
		$this->room = $room;
		$this->startTime = $startTime;
		$this->endTime = $endTime;
		$this->term = $term;
	}
	###	
	
	/* SQL TIME REF: http://dev.mysql.com/doc/refman/5.0/en/time.html */
	function updSection($section){}

}
###

?>
