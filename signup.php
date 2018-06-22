<?php
session_start();
include('lib/actions.php');
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
    <title>Inscription - Greenings</title>
    
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
    <!-- Custom header -->
    <header>
          <div class="container">
              <div class="header clearfix">
                  <nav>
                    <!-- Login link -->
                    <ul class="nav nav-pills pull-right loggedout">
                      <li role="signup"><a href="login.php" id="login">Vous avez déjà un compte ? Connectez-vous !</a></li>
                    </ul>
                  </nav>
                  <!-- Title and link to homepage -->
              <h3 class="text-muted"> <a href="index.php" id="title">Greenings</a></h3>
          </div>
      </div>
    </header>

    <div class="container content" id="container">
      <!-- Login form -->
      <form method="post" class="form-horizontal">
        <input type="hidden" name="action" value="signup">
        <fieldset>

          <!-- Form Name -->
          <legend>Inscription</legend>
          
          <!-- Text input-->
          <div class="form-group">
            <!-- Login -->
            <label class="col-md-4 control-label" for="textinput">Choisissez un pseudo</label>  
            <div class="col-md-4">
              <input id="textinput" required name="login" type="text" class="form-control input-md">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <!-- Mail -->
            <label class="col-md-4 control-label" for="textinput">Saisissez votre adresse mail</label>  
            <div class="col-md-4">
              <input id="textinput" required name="mail" type="email" class="form-control input-md">
            </div>
          </div>
            
          <!-- Text input-->
          <div class="form-group">
            <!-- Password -->
            <label class="col-md-4 control-label" for="textinput">Choisissez un mot de passe</label>  
              <div class="col-md-4">
                <input id="textinput" name="pwd" type="password" class="form-control input-md">
              </div>
          </div>

          <!-- Button -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton"></label>
              <div class="col-md-4">
                <button type="submit" id="singlebutton" class="btn btn-success">Inscription</button>
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
