<?php

  $value = "Welt";

  function hallo(){
    global $value;
    echo "Hallo " . $value . "<br>";
  }

  hallo();


  function summe($x){
    if($x == 0){
      return 0;
    }
    echo $x . "<br>";
    return summe($x - 1) + $x;
  }

  echo summe(5);

?>
