<?php
// Create function
function create($date, $name, $place, $theme, $desc) {
    // Database connection
    $db = db_connect();

    // If the user isn't logged in, he is headed towards the login page
    if (!(isset($_SESSION['id_user']))) {
        header("Location: login.php");
        exit;   
    }

    else {
        // Adds input values to the database
        $req = $db->prepare("INSERT INTO events (id_user, event_date, event_name,  event_place, event_theme, event_desc) VALUES(:id, :date, :name, :place, :theme, :desc)");
        $req->execute(array(
            "id" => $_SESSION['id_user'],
            "date" => $date,
            "name" => $name,
            "place" => $place,
            "theme" => $theme,
            "desc" => $desc
        ));

        $req->rowCount();
        header("Location: ok_create.php");
        exit;
    }
}