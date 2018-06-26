<?php
// For the session to be active
session_start();

// Actions include
include('lib/actions.php');

// Database connection
$db = db_connect();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <!-- Title -->
    <title>Créer un évènement - Greenings</title>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Poppins" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/index.css" rel="stylesheet">
  </head>

  <body>
    <!-- Header -->
    <?php include('includes/header.inc.php'); ?>

    <div class="container content" id="container">
        <!-- Method post to send data -->
        <form method="post" class="form-horizontal">
            <input type="hidden" name="action" value="create">
            <fieldset>
        
                <!-- Form Name -->
                <legend>Créer votre évènement</legend>

                <div class="form-group">
                    <!-- Event name -->
                    <label class="col-md-4 control-label" for="name">Nom de l'évènement</label>
                    <div class="col-md-4">
                        <!-- Required because database doesn't register blank values -->
                        <input id="name" required name="name" type="text" placeholder="Nom de l'évènement" class="form-control input-md">
                        <span class="help-block">Donnez un nom à votre évènement</span>
                    </div>
                </div>

                <div class="form-group">
                    <!-- Event location -->
                    <label class="col-md-4 control-label" for="place">Lieu</label>
                    <div class="col-md-4">
                        <!-- Required because database doesn't register blank values -->
                        <input id="place" required name="place" type="text" placeholder="Adresse, lieu public, parcours..." class="form-control input-md">
                        <span class="help-block">Renseignez le point de rendez-vous</span>
                    </div>
                </div>

                <div class="form-group">
                    <!-- Event datetime -->
                    <label class="col-md-4 control-label" for="date">Date et heure</label>
                    <div class="col-md-4">
                        <!-- Required because database doesn't register blank values -->
                        <input id="date" required name="date" type="datetime-local" class="form-control">
                        <span class="help-block">Indiquez une date et une heure de rendez-vous</span>
                    </div>
                </div>

                <div class="form-group">
                    <!-- Event description -->
                    <label class="col-md-4 control-label" for="description">Description</label>
                    <div class="col-md-4">
                        <!-- Required because database doesn't register blank values -->
                        <textarea id="description" required name="desc" placeholder="Description" class="form-control"></textarea>
                        <span class="help-block">Décrivez l'évènement</span>
                    </div>
                </div>

                <div class="form-group">
                    <!-- Event theme -->
                    <label class="col-md-4 control-label" for="theme">Thème</label>
                    <div class="col-md-4">
                        <select id="theme" name="theme" class="form-control">
                            <option value="1">Ramassage simple</option>
                            <option value="2">Balade</option>
                            <option value="3">Ludique</option>
                            <option value="4">Sport</option>
                            <option value="5">Autres</option>
                        </select>
                        <span class="help-block">Choisissez un de nos thèmes par défaut</span>
                    </div>
                </div>

                <!-- Save button -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="singlebutton"></label>
                    <div class="col-md-4">
                    <button type="submit" id="singlebutton" name="singlebutton" class="btn btn-success">Valider</button>
                    </div>
                </div>
                
            </fieldset>
        </form>
    </div>

    <!-- Footer -->
    <?php include('includes/footer.inc.php'); ?>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
