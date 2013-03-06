<?php // major_survey.php

/* Functionality for Survey portion of site */
require_once "site_settings.php";
require_once "server_connect.php";

#doc
#  classname:  Major_Survey
#  scope:    PUBLIC
#
#/doc

class Major_Survey 
{
  #  internal variables
  private $answers, $major;
  #  Constructor
  function __construct ($answers, $major)
  {
    # code...
    $this->answers = $answers;
    $this->major = $major;
  }
  ###  
  function recmdMajor($major){}
	function getQuestion(){}
	function setAns($answer){}
}
###

#doc
#  classname:  Question
#  scope:    PUBLIC
#
#/doc

class Question 
{
  #  internal variables
  
  #  Constructor
  function __construct ($text, $selectedAns, $answer)
  {
    # code...
    $this->text = $text;
    $this->selectedAns = $selectedAns;
    $this->answer = $answer;
  }
  ###  
	function setAns($answer){}
}
###

?>
