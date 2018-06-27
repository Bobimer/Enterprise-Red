<?php
// For the session to be active
session_start();

// Database connection include
include('includes/db_connect.inc.php');

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
    <title>Évènement - Greenings</title>

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
    <div class="container">
      <!-- Header include -->
      <?php include('includes/header.inc.php'); ?>

      <!-- Database event fetch by id -->
      <?php 
        $id = $_GET['id'];

        $req = $db->prepare("SELECT * FROM events WHERE id_event = :id");
        $req->execute(array(
          "id" => $id
        ));
        $result = $req->fetch();
        ?>
          
          <div class='container content' id='container'>
            <!-- Event name fetch -->
            <legend><?=$result['event_name']?></legend>
            <div class='col-md-12 eventdetail'>
              <div class='col-md-4 detailtitle'>Lieu</div>
              <!-- Place fetch -->
              <div class='col-md-5 detaildesc'> <?=$result['event_place']?></div>
            </div>

            <br>

            <div class='col-md-12 eventdetail'>
              <div class='col-md-4 detailtitle'>Date</div>
              <!-- Date fetch -->
              <div class='col-md-5 detaildesc'><?=$result['event_date']?></div>
            </div>
            <div class='col-md-12 eventdetail'>
              <div class='col-md-4 detailtitle'>Description</div>
              <!-- Description fetch -->
              <div class='col-md-5 detaildesc'><?=$result['event_desc']?></div>
            </div>

            <br>

            <div class='col-md-12 eventdetail'>
              <div class='col-md-4 detailtitle'>Thème</div>
              <!-- Theme fetch -->
            <div class='col-md-5 detaildesc'><?=$result['event_theme']?></div>
          </div>
    </div>
    
    <!-- Footer include -->
    <?php include('includes/footer.inc.php'); ?>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
