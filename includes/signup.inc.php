<?php

    $mail = $_POST['mail'];
    $login = $_POST['login'];
    $pwd = $_POST['pwd'];
        
    $errors = signup($login, $mail, $pwd);

    function signup($login, $mail, $password) {
        $db = db_connect();
        
        if (empty($_POST['mail']) || empty($_POST['login']) || empty($_POST['pwd'])){
            $message = '<label>Tous les champs doivent être renseignés</label>';
        }
        else {
        $hash = hash("sha256", $password . $mail);//Mot de passe crypte
        $req = $db->prepare("INSERT INTO users (user_login, user_email, user_pwd) VALUES(:login, :mail, :pwd)");
        $req->execute(array(
                "login" => $login,
                "mail" => $mail,
                "pwd" => $hash
        ));
    
            $req->rowCount();
        header("Location: ok_signup.php");
        exit;
        }
    }



