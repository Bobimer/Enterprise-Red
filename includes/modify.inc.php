<?php
if (isset($_POST['modify'])) {
        // Database connection
        $db = db_connect();

        // Modifies the login of the session's id
        $req = $db->prepare("UPDATE `users` SET user_login = :login WHERE id_user = :id");
        $req->execute(array(
                "login" => $_POST['login'],
                "id" => $_SESSION['id_user']
        ));

        // Heads to ok_modify.php
        header("Location: ok_modify.php");
        exit;
}
    