<?php
            if (isset($_REQUEST['delete'])) 
            {
                  $db = db_connect();
                  $req = $db->prepare("DELETE FROM `users` WHERE id_user = :id");
                  $req->execute(array(
                    "id" => $_SESSION['id_user']
                    // $_POST['id_user']
                  ));
                  session_destroy();
                  header('Location: ../ok_delete.php');
                  exit;
            } 