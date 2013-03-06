<?php // user.php

require_once "site_settings.php";
require_once "server_connect.php";

#doc
#  classname:  User
#  scope:    PUBLIC
#
#/doc

class User 
{
  #  internal variables
	private $userID, $name, $password, $email, $major, $plans, $compCourse,$othCourses;
			
  #  Constructor
  function __construct ($name, $email, $password)
  {
    # code...
    $this->userID = $userID;
    $this->password = $password;
    $this->name = $name;
	$this->email = $email;
  }
  ###  

  function login(){}
	function logOut(){}
	function setName($newname){}
	function getName(){}
	function setPassword($newpass){}
	function getPassword(){}
	function setEmail($email){}
	function getEmail(){}
	function addCompCourse($courseID, $plan){}
	function remvCompCourse($courseID, $plan){}
	function addOthCourse($courseID, $plan){}
	function remOthCourse($courseID, $plan){}
	function updatePlan($plan, $course, $major){}
	function rateCourse($courseID){}
}
###

?>
