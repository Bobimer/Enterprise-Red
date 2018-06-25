<?php
session_start();
    include('includes/db_connect.inc.php');
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

    <title>Évènement - Greenings</title>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Poppins" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/index.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  </head>

  <body>
    <div class="container">
      <!-- Header -->
      <?php include('includes/header.inc.php'); ?>

    <?php 
      $id = $_GET['id'];

      $req = $db->prepare("SELECT * FROM events WHERE id_event = :id");
      $req->execute(array(
        "id" => $id
      ));
      $result = $req->fetch();

      echo 
      "<div class='container' id='container'>
        <h2>Nom </h2>".$result['event_name']."
        <h4>Lieu </h4>".$result['event_place']."
        <h5>Date </h5>".$result['event_date']."
        <h4>Description :</h4>".$result['event_desc']."
        <h4>Theme :</h4>".$result['event_theme']."
      </div>";
    ?>
    
    <!-- Footer -->
    <?php include('includes/footer.inc.php'); ?>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
