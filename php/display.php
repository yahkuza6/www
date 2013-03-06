<?php // display.php

require_once 'site_settings.php';
require_once "server_connect.php";
require_once 'plans.php';

#doc
#  classname:  Display
#  scope:    PUBLIC
#
#/doc

class Display 
{
  #  internal variables
  private $plan, $hasUpdates;
  
  #  Constructor
  function __construct ($plan)
  {
    # code...
    $this->plan = $plan;
  }
  ###  

  function getPlan(){}
  function dispPlan($plan){}
}
###

?>
