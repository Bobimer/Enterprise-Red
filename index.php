<?php
// For the session to be active 
session_start();

// Database connection include
include ('includes/db_connect.inc.php');

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
    <title>Accueil - Greenings</title>

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
    <!-- Header include -->
    <?php include('includes/header.inc.php'); ?>

    <div class="container content" id="container">
      <!-- Jumbotron -->
      <div class="jumbotron">
        <!-- Welcome message -->
        <h1>Bienvenue sur Greenings !</h1>
        <p class="lead">Rejoignez le mouvement et participez à des évènements ou proposez les vôtres afin de rendre nos rues plus propres ensemble !</p>
        <p></p>
        <!-- Event creation and search buttons -->
        <a class="btn btn-lg btn-success" href="create.php" role="button">Créer un évènement &raquo;</a>
        <a class="btn btn-lg btn-success" href="search.php" role="button">Rechercher un évènement &raquo;</a>
      </div>
    </div>

    <!-- Footer include -->
    <?php include('includes/footer.inc.php'); ?>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
