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
    <title>Rechercher un évènement - Greenings</title>
    
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
    <!-- Header -->
    <?php include('includes/header.inc.php'); ?>

    <div class="container content" id="container">
      <form class="form-horizontal">
        <fieldset>
          
          <!-- Form Name -->
          <legend>Rechercher un évènement</legend>

          <!-- Name search -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Recherche par nom</label>  
              <div class="col-md-5">
                <input id="textinput" name="textinput" type="text" placeholder="Nom de l'évènement" class="form-control input-md">
              </div>
          </div>
          
          <!-- Button -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton"></label>
              <div class="col-md-4">
                <button id="singlebutton" name="singlebutton" class="btn btn-success">Recherche</button>
              </div>
          </div>

          <!-- Location search -->
          <div class="form-group">
              <label class="col-md-4 control-label" for="textinput">Recherche par lieu</label>  
                <div class="col-md-5">
                  <input id="textinput" name="textinput" type="text" placeholder="Lieu de l'évènement" class="form-control input-md">
                </div>
            </div>
            
            <!-- Button -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="singlebutton"></label>
                <div class="col-md-4">
                  <button id="singlebutton" name="singlebutton" class="btn btn-success">Recherche</button>
                </div>
            </div>

            <!-- Date search -->
          <div class="form-group">
              <label class="col-md-4 control-label" for="textinput">Recherche par date</label>  
                <div class="col-md-5">
                  <input id="textinput" name="textinput" type="text" placeholder="Date de l'évènement" class="form-control input-md">
                </div>
            </div>
            
            <!-- Button -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="singlebutton"></label>
                <div class="col-md-4">
                  <button id="singlebutton" name="singlebutton" class="btn btn-success">Recherche</button>
                </div>
            </div>

            <!-- Theme search -->
          <div class="form-group">
              <label class="col-md-4 control-label" for="textinput">Recherche par thème</label>  
                <div class="col-md-5">
                  <select id="selectbasic" name="selectbasic" class="form-control">
                      <option value="1">Ramassage simple</option>
                      <option value="2">Ballade</option>
                      <option value="3">Ludique</option>
                      <option value="4">Sport</option>
                      <option value="5">Autres</option>
                  </select>                
                </div>
            </div>
            
            <!-- Button -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="singlebutton"></label>
                <div class="col-md-4">
                  <button id="singlebutton" name="singlebutton" class="btn btn-success">Recherche</button>
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
