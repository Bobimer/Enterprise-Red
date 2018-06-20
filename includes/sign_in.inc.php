<?php

function signin($login, $mail, $pwd, $fromCookie = false) {
  $db = $GLOBALS['db'];
  if($fromCookie == true) {$hash = $pwd;}
  else {$hash = hash("sha256", $pwd . $_POST['mail']);}

  $req = $db->prepare("SELECT * FROM user WHERE user_login = :login AND user_email = :mail AND user_pwd = :pwd");
  $req->execute(array(
        "login" => $login,
        "mail"  => $mail,
        "pwd"   => $hash));
  $dataUser = $req->fetch();

  if($req->rowCount() == 1) {
    setcookie("login", $login, time() + (86400 * 30), "/"); // 86400 = 1 jour
    setcookie("mail", $mail, time() + (86400 * 30), "/"); // 86400 = 1 jour
    setcookie("pwd", $hash, time() + (86400 * 30), "/"); // 86400 = 1 jour

    $_SESSION['idUser'] = $dataUser['id'];
    header("Location: index.php"); // Lorsque log envoie vers la page Index
  }else {
    echo "Identifiant ou mot de passe incorrect.";

  }
}