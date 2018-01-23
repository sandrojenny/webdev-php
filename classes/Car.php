<?php

/**
 *  Class Car
 */
class Car {
  private $brand;
  private $ps;
  private $extColor;
  private $intColor;

  public function __construct($brand, $ps)
  {
    $this->brand = $brand;
    $this->ps = $ps;
  }

  public function setDesign($extColor, $intColor){
    $this->extColor = $extColor;
    $this->intColor = $intColor;
  }

  public function drive($locationA, $locationB){
    echo "A " . $this->extColor . " " . $this->brand . " drives with " . $this->ps . " PS from " . $locationA . " to " . $locationB . ".<br>";
  }

}

?>
