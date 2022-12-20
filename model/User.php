<?php

namespace SecSpirit\Twitter\Model;

class User {
  private $_id;
  private $_name;
  private $_password;

  public function __construct($id, $name, $password){
    $this->setId($id);
    $this->setName($name);
    $this->setPassword($password);
  }

  public function setId($id)
    {
      $this->_id = $id;
    }
  public function setName($name)
    {
      $this->_name = $name;
    }
  public function setPassword($password)
    {
      $this->_password = $password;
    }

  public function getId()
    {
      return $this->_id;
    }
  public function getName()
    {
      return $this->_name;
    }
  public function getPassword()
    {
      return $this->_password;
    }
  
}
/* 

Created By HardSpirit
SecSpirit - 2020

*/
?>