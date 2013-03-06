<?php

require_once 'site_settings.php';
require_once "server_connect.php";

#doc
#	classname:	Plans
#	scope:		PUBLIC
#
#/doc

class Plans 
{
	#	internal variables
	private $planID, $name, $sections;
	
	#	Constructor
	function __construct ($planID, $name, $sections)
	{
		# code...
		$this->planID = $planID;
		$this->name = $name;
		$this->sections = array($sections);
	}
	###	

}
###

?>
