<?php

  function bmicalc($weight, $height){
    return $bmi = $weight / pow($height, 2);
  }

  echo "Mein BMI ist ". bmicalc(102, 1.83);

  

?>
