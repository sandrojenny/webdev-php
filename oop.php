<?php

  class jobCalculator {

    function __construct()
    {
      echo "Welcome to the Job Calculator.<br>";
    }

    function workingTime($start, $end, $break){
      return $workingTime = ($end - $start) - $break;
    }

    function calcOffer($time, $costs = 160){
      echo "Offer: " . $time . " hours for 160.-/h = CHF " . $time * $costs . ".–<br>";
    }

  }

  $workingday = new jobCalculator();

  echo "My working time today was: <b>" . $workingday->workingTime(7, 18, 2) . " hour(s)</b><br>";
  $workingday->calcOffer(5);


?>
