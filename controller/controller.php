<?php 
/* 

Created By HardSpirit
SecSpirit - 2020

*/
    require_once('model/UserManager.php');
    require_once('model/cryptage.php');
    function connectUser($author, $password){
        $userManager = new SecSpirit\Twitter\Model\UserManager();
        $login = $userManager->connectUser($author, $password);
        if ($login == true) {
          $nameSession = $login->getName();
          $_SESSION['name'] = $nameSession;
          header('Location: index.php?action=cryptage');
        } else {
          throw new Exception ('Erreur login');
        }
    }
    function cryptMessage($message, $cle){
      $messageCrypte = new SecSpirit\Twitter\Model\cryptage();
      $messageC = $messageCrypte->cryptMessModel($message, $cle);
      $cleC = $cle;
      require('view/viewCrypt.php');
    }
    function decrypt($message, $cle){
      $messageCrypte = new SecSpirit\Twitter\Model\cryptage();
      $messageC = $messageCrypte->decryptMess($message, $cle);
      $cleC = $cle;
      require('view/viewCrypt.php');
    }
    /* 

Created By HardSpirit
SecSpirit - 2020

*/
?>