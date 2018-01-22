<?php

  function bmicalc($weight, $height){
    return $bmi = $weight / pow($height, 2);
  }

  $bmi= bmicalc(103, 1.83);

  if ($bmi > 25) {
    echo "Dein BMI ist " . $bmi . ". Du bist eine fette Sau";
  } else {
    echo "Schwein gehabt";
  }







?>
