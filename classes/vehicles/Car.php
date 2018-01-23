<?php

/**
 *  Class Car
 */

namespace app\vehicles;

use app\cms\User as cmsUser;

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
    $user = new cmsUser();
    $driver = $user->getUsername("Sandro");
    echo $driver ." " . $this->extColor . " " . $this->brand . " drives with " . $this->ps . " PS from " . $locationA . " to " . $locationB . ".<br>";
  }

}

?>
