<?php

  function autoload($className){
    if (file_exists("classes/{$className}.php")) {
      require_once("classes/{$className}.php");
    }
  }

  spl_autoload_register("autoload");

  $audi = new Car("Audi Q3", 170);
  $audi->setDesign("black", "blue");
  $audi->drive("Fribourg", "Bern");

  $porsche = new SuperCar("Porsche", 300);
  $porsche->setDesign("yellow", "black");
  $porsche->drive("Zurich", "Geneva");

?>
