<?php
/* 

Created By HardSpirit
SecSpirit - 2020

*/

namespace SecSpirit\Twitter\Model;

require_once("model/Manager.php");
require_once('model/User.php');

class UserManager extends Manager
{
  public function connectUser($author, $password){
    $db = $this->dbConnect();
    $req = $db->prepare("SELECT * FROM users WHERE user = :user ");
    if (is_string($author)){
      $req->execute(array(':user'=>$author));
    }
    if ($req == true){
      foreach($req as $log){
        if ($password == $log['password']){
          $user = new User($log['id'], $log['user'], $log['password']);
          return $user;
        } else {
          throw new Exception('Erreur lors de la connexion.');
        }
      }

    } else {
      throw new Exception('Erreur lors de la connexion.');
    }
  }
}
/* 

Created By HardSpirit
SecSpirit - 2020

*/
?>