<?php

namespace SecSpirit\Twitter\Model;

class Manager
{
    public function dbConnect()
    {
      $db = new \PDO('mysql:host=localhost:8889;dbname=ctf_base;charset=utf8', 'admin', 'VeryStrongPa55w0rdz!!lulz');
      return $db;

    }

}
