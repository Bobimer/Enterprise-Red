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

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

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
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <!-- Connexion/Inscription links -->
            <li role="presentation"><a href="login.php" id="login">Connexion</a></li>
            <li role="presentation"><a href="signup.php" id="signup">Inscription</a></li>
          </ul>
        </nav>
        <!-- Title and link to homepage -->
        <h3 class="text-muted"> <a href="index.php" id="title">Greenings</a></h3>
      </div>
      
      <div class="container" id="container">
        <form class="form-horizontal">
        <fieldset>
        
        <!-- Form Name -->
        <legend>Votre profil</legend>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Changez votre adresse mail</label>  
          <div class="col-md-4">
          <input id="textinput" name="textinput" type="text" placeholder="Nouvelle adresse" class="form-control input-md">
          </div>
        </div>
        
        <!-- Password input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="passwordinput">Changez votre mot de passe</label>
          <div class="col-md-4">
            <input id="passwordinput" name="passwordinput" type="password" placeholder="Nouveau mot de passe" class="form-control input-md">
            
          </div>
        </div>
        
        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="singlebutton">Valider les changements</label>
          <div class="col-md-4">
            <button id="singlebutton" name="singlebutton" class="btn btn-success">Valider</button>
          </div>
        </div>
        
        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="singlebutton">Supprimer le compte</label>
          <div class="col-md-4">
            <button id="singlebutton" name="singlebutton" class="btn btn-danger">Supprimer</button>
          </div>
        </div>
        
        </fieldset>
        </form>
        
        </div>
    
    <div class="container">
      <!-- Footer -->
      <footer class="footer">
        <p>&copy; 2018 Entreprise Red, Inc.</p>
      </footer>
    </div>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
