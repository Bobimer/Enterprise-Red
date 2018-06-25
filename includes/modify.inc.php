<?php

if (isset($_POST['modify'])) {
        $db = db_connect();

        
        $req = $db->prepare("UPDATE `users` SET user_login = :login WHERE id_user = :id");
        $req->execute(array(
                "login" => $_POST['login'],
                "id" => $_SESSION['id_user']
        ));
        header("Location: ok_modify.php");
        exit;
}
    