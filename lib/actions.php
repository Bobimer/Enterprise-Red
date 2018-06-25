<?php

error_reporting(E_ALL & ~E_NOTICE);
ini_set('error_reporting', E_ALL);

include ('includes/db_connect.inc.php');
include ('includes/signup.inc.php');
include ('includes/login.inc.php');
include ('includes/create.inc.php');
include ('includes/search.inc.php');

switch(@$_POST["action"]) {
    default: break;
    case "signup":
        
        $mail = $_POST['mail'];
        $login = $_POST['login'];
        $pwd = $_POST['pwd'];
        
        $errors = signup($login, $mail, $pwd);
        break;
        
    case "login":
        
        $login = $_POST['login'];
        $pwd = $_POST['pwd'];
        $errors = login($login, $pwd);
        break;


    case "modify":
        
        $mail = $_POST['mail'];
        $login = $_POST['login'];
        $pwd = $_POST['pwd'];
        
        $errors = modify($login, $mail, $pwd);
        break;
        
     case "create":
        
        $date = $_POST['date'];
        $name = $_POST['name'];
        $place = $_POST['place'];
        $theme = $_POST['theme'];
        $desc = $_POST['desc'];
        
        $errors = create($date, $name, $place, $theme, $desc);
        break;

}