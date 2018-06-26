<?php
// Signup function
function signup($login, $mail, $password) {
    // Database connection
    $db = db_connect();
    
    /*
    if (empty($_POST['mail']) || empty($_POST['login']) || empty($_POST['pwd'])){
        $message = '<label>Tous les champs doivent être renseignés</label>';
    }
    else {*/
    // Password encryption
    $hash = hash("sha256", $password . $mail);
    $req = $db->prepare("INSERT INTO users (user_login, user_email, user_pwd) VALUES(:login, :mail, :pwd)");
    $req->execute(array(
            "login" => $login,
            "mail" => $mail,
            "pwd" => $hash
    ));

    $req->rowCount();
    header("Location: ok_signup.php");
    exit;
    // }
}