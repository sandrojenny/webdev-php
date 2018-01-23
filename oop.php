<?php

  function autoload($className){

    $prefix = "app";
    $dir = "classes";

    $clss = substr($className, strlen($prefix));
    $clss = str_replace("\\", "/", $clss);

    if (file_exists("{$dir}{$clss}.php")) {
      require_once("{$dir}{$clss}.php");
    }
  }

  spl_autoload_register("autoload");

  $audi = new app\vehicles\Car("Audi Q3", 170);
  $audi->setDesign("black", "blue");
  $audi->drive("Fribourg", "Bern");

  $porsche = new app\vehicles\SuperCar("Porsche", 300);
  $porsche->setDesign("yellow", "black");
  $porsche->drive("Zurich", "Geneva");

?>
