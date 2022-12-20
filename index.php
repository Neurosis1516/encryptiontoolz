<?php session_start();?>
<?php
$ip = $_SERVER['REMOTE_ADDR'];
$browser = $_SERVER['HTTP_USER_AGENT'];
$dateTime = date('Y/m/d G:i:s');
$file = "visitors.html";
$file = fopen($file, "a");
if (isset($_SESSION['name'])){
    $name = $_SESSION['name'];
	$data = "<pre><b>User $name IP</b>: $ip <b> Browser</b>: $browser <br>on Time : $dateTime <br></pre>";
} else {
$data = "<pre><b>User IP</b>: $ip <b> Browser</b>: $browser <br>on Time : $dateTime <br></pre>";
};
fwrite($file, $data);
fclose($file);
/* 

SecSpirit - 2020

*/
require('controller/controller.php');
try{
    if (isset($_SESSION['name'])){
        if ($_GET['action'] == 'cryptage'){
            header('Location: crypt.html');
        }
        if ($_GET['action'] == 'cryptMess'){
            if ($_POST['messCrypt'] == 'crypt'){
                cryptMessage($_POST['message'], $_POST['cle']);
            }
            if ($_POST['messCrypt'] == 'decrypt'){
                decrypt($_POST['message'], $_POST['cle']);
            }
        }
        if ($_GET['action'] == "deconnect"){
            $_SESSION = array();
            session_destroy();
            header('Location: index.php');
        }
        else {
            header('Location: crypt.html');
        }
     }  else if ($_GET['action'] == 'authentification'){
        if (isset($_SESSION['name'])){
            header('Location: crypt.html');
        } else{
            connectUser($_POST['author'],$_POST['password']);
          header('Location: crypt.html');
        }
      } else {
        header('Location: login.html');
      }
    }
catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}
/* 

Created By HardSpirit
SecSpirit - 2020

*/
?>