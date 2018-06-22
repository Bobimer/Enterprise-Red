<?php
    
    function login($login, $pwd) {
        $db = db_connect();

        $req = $db->prepare('SELECT id_user, user_pwd, user_email FROM users WHERE user_login = :login');
        $req->execute(array("login" => $login));
        $result = $req->fetch();
        
        $compare = hash("sha256", $pwd . $result['user_email']);

        if ($compare == $result['user_pwd']) {
            session_start();
            $_SESSION['id_user'] = $result['id_user'];
            $_SESSION['login'] = $pseudo;
            header("Location: ok_login.php");
        }
        else {
        echo 'Mauvais identifiant ou mot de passe !';
        }
    }