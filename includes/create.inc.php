<?php

    function create($date, $name, $place, $theme, $desc) 
    {
        $db = db_connect();
        
        if (!(isset($_SESSION['id_user']))) 
        {
            echo "non connecté";
            header("Location: login.php");
            exit;   
        }
        else
        {
            echo "connecté";
            if (empty($_POST['date']) || empty($_POST['name']) || empty($_POST['place'])|| empty($_POST['theme']) || empty($_POST['desc']))
            {
                $message = '<label>Tous les champs doivent être renseignés</label>';
            }
            else 
            {
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
      
    }