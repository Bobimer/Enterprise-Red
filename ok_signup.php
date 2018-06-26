<?php
// For the session to be active
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- The 3 meta tags below *must* come first in the head; any other head content must come *after* these tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <!--Title-->
    <title>Inscription réussie - Greenings</title>
    
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
      <!-- Success message -->
      <p>Félicitations vous êtes inscrit !</p>
      <!-- Login link -->
      <a href="login.php">Connectez-vous</a>
      <p>ou</p>
      <!-- Homepage link -->
      <a href="index.php">Retournez à la page d'accueil</a>
    </div>

    <!-- Footer include -->
    <?php include('includes/footer.inc.php'); ?>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
