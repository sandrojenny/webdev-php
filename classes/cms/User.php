<?php

  namespace app\cms;

  /**
   *  Class User
   */
  class User
  {

    private $username;

    public function getUsername($username){
      return $this->username = $username;
    }

  }

?>
