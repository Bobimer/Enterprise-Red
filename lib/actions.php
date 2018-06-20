<?php

error_reporting(E_ALL & ~E_NOTICE);
ini_set('error_reporting', E_ALL);

include ('includes/db_connect.inc.php');
include ('includes/sign_up.inc.php');
include ('includes/sign_in.inc.php');

switch(@$_POST["action"]) {
    default: break;
    case "signup":
        
        $mail = $_POST['mail'];
        $login = $_POST['login'];
        $pwd = $_POST['pwd'];
        
        $errors = signup($login, $mail, $pwd);
        break;
}

  
    