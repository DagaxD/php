<?php
session_start();

if ( isset($_SESSION['is_auth']) && $_SESSION['is_auth'] == 1){
        echo "Jesteś zalogowany";
        header('Location: dashboard.php');
        exit;
    } else {echo "Nie jesteś zalogowany";}

$loginemail = $_POST["email"];
$loginpassword = $_POST["password"];

$_SESSION[$email] = $loginemail;
$_SESSION[$password] = $loginpassword;

if(empty($loginemail) ||empty($loginpassword)){
    exit ("Błędne dane");
}

$emailmd5 = md5($loginemail);
$filename = "data/".$emailmd5;
if(!file_exists($filename)){
    echo "Podane konto nie istnieje";
} else {
  $content = file_get_contents($filename);
  $user = unserialize($content);
  $_SESSION['user'] = $user;
if($user['password'] == $loginpassword){
    $_SESSION['is_auth'] = 1;
    header('Location: dashboard.php');
} else {
    echo "Błędne hasło";
}
}

