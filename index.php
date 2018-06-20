<?php 
include ('includes/db_connect.inc.php');

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

    <title>Accueil - Greenings</title>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/index.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Header -->
    <header>
      <div class="container">
          <div class="header clearfix">
              <nav>
                <ul class="nav nav-pills pull-right">
                  <!-- Connexion/Inscription links -->
                  <li role="presentation"><a href="login.php" id="login">Connexion</a></li>
                  <li role="presentation"><a href="signup.php" id="signup">Inscription</a></li>
                </ul>
              </nav>
              <!-- Title and link to homepage -->
              <h3 class="text-muted"> <a href="index.html" id="title">Greenings</a></h3>
          </div>
      </div>
    </header>

    <div class="container content" id="container">
      <!-- Jumbotron -->
      <div class="jumbotron">
        <!-- Welcome message -->
        <h1>Bienvenue sur Greenings !</h1>
        <p class="lead">Rejoignez le mouvement et participez à des évènements ou proposez les vôtres afin de rendre nos rues plus propres ensemble !</p>
        <p></p>
        <!-- Event search and creation buttons -->
        <a class="btn btn-lg btn-success" href="create.html" role="button">Créer un évènement &raquo;</a>
        <a class="btn btn-lg btn-success" href="search.html" role="button">Rechercher un évènement &raquo;</a>
      </div>

      <!-- Line division -->
      <br>
      <hr class="style1">
      <br>

      <!-- Partner event -->
      <div class="row marketing">
        <div class="col-md-12" id="pevent">
          <!-- Title -->
          <h2>Évènement partenaire</h2>
          <!-- Info -->
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum
            nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
          <p>
            <!-- Access button -->
            <a class="btn btn-default" href="event.html" role="button">Voir cet évènement &raquo;</a>
          </p>
        </div>
      </div>

      <!-- Line division -->
      <br>
      <hr class="style1">
      <br>

      <!-- Community events -->
      <div class="row marketing">
        <div class="col-lg-4">
          <div class="col-lg-12" id="cevent">
            <!-- Title -->
            <h4>Évènement</h4>
            <!-- Info -->
            <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
            <p>
              <!-- Access button -->
              <a class="btn btn-default" href="event.html" role="button">Voir cet évènement &raquo;</a>
            </p>
          </div>
        </div>
            
        <div class="col-lg-4">
          <div class="col-lg-12" id="cevent">
            <!-- Title -->
            <h4>Évènement</h4>
            <!-- Info -->
            <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
            <p>
              <!-- Access button -->
              <a class="btn btn-default" href="event.html" role="button">Voir cet évènement &raquo;</a>
            </p>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="col-lg-12" id="cevent">
            <!-- Title -->
            <h4>Évènement</h4>
            <!-- Info -->
            <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
            <p>
              <!-- Access button -->
              <a class="btn btn-default" href="event.html" role="button">Voir cet évènement &raquo;</a>
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <div class="container">
      <footer class="footer">
        <p>&copy; 2018 Entreprise Red, Inc.</p>
      </footer>
    </div>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
