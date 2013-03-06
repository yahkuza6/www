<?php

require_once 'site_settings.php';
require_once "server_connect.php";

#doc
#	classname:	Major
#	scope:		PUBLIC
#
#/doc

class Major
{
	#	internal variables
	private $majorID, $name, $reqdCourses;
	
	#	Constructor
	function __construct ($majorID, $name, $reqdCourses)
	{
		# code...
		$this->majorID = $majorID;
		$this->name = $name;
		$this->reqdCourses = array($reqdCourses);
	}
	###	

	function updReqs(){}
	function getReqs(){}

}
###

?>
