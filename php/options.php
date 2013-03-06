<?php // options.php

require_once 'site_settings.php';
require_once "server_connect.php";

#doc
#  classname:  Option
#  scope:    PUBLIC
#
#/doc

class Option 
{
  #  internal variables
  private $creditsPerTerm, $timeOfDay;
  
  #  Constructor
  function __construct ($creditsPerTerm, $timeOfDay)
  {
    # code...
    $this->creditsPerTerm = $creditsPerTerm;
    $this->timeOfDay = $timeOfDay;
  }
  ###  

  function updateOptions($credits, $time){}
}
###

?>
