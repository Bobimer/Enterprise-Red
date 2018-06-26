<?php
// For the session to be active
session_start();

// Database Connection include
include ('includes/db_connect.inc.php');
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
    <title>Compte - Greenings</title>

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
      
      <div class="container" id="container">
        <!-- Method post to send data -->
        <form method="post" class="form-horizontal">
        <input type="hidden" name="action" value="modify">
        <fieldset>
        
        <!-- Form Name -->
        <legend>Votre profil</legend>

            <!-- Login change (availability not implemented yet) -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="login">Changez votre pseudo</label>  
          <div class="col-md-4">
          <input id="login" name="login" type="text" placeholder="Nouveau pseudo" class="form-control input-md">
          </div>
        </div>
        
            <!-- Mail and password changes, not functional
            Mail change
        <div class="form-group">
          <label class="col-md-4 control-label" for="mail">Changez votre adresse mail</label>  
          <div class="col-md-4">
          <input id="mail" name="mail" type="email" placeholder="Nouvelle adresse" class="form-control input-md">
          </div>
        </div>
        
            Password change
        <div class="form-group">
          <label class="col-md-4 control-label" for="passwordinput">Changez votre mot de passe</label>
          <div class="col-md-4">
            <input id="pwd" name="pwd" type="password" placeholder="Nouveau mot de passe" class="form-control input-md">
            
          </div>
        </div>
            -->
        
        <!-- Save changes button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="singlebutton">Valider les changements</label>
          <div class="col-md-4">
            <button type-"submit" id="button" name="modify" class="btn btn-success" value="modify">Valider</button>
          </div>
        </div>

            <!-- Modify include -->
        <?php include('includes/modify.inc.php'); ?>
        
        <!-- Delete account button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="button">Supprimer le compte</label>
          <div class="col-md-4">
          <button type-"submit" id="button" name="delete" class="btn btn-danger" value="delete">Supprimer</button>

              <!-- Delete include -->
          <?php include('includes/delete.inc.php'); ?>

          </div>
        </div>
        
        </fieldset>
        </form>
        
        </div>

        <!-- Footer include -->
        <?php include('includes/footer.inc.php'); ?>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
