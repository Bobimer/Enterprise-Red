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

    <title>Créer un évènement - Greenings</title>

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
                <legend>Créer votre évènement</legend>

                <div class="form-group">
                    <!-- Event name -->
                    <label class="col-md-4 control-label" for="event_name">Nom de l'évènement</label>
                    <div class="col-md-4">
                        <input id="event_name" name="event_name" type="text" placeholder="Nom de l'évènement" class="form-control input-md">
                        <span class="help-block">Donnez un nom à votre évènement</span>
                    </div>
                </div>

                <div class="form-group">
                    <!-- Event location -->
                    <label class="col-md-4 control-label" for="textarea">Lieu</label>
                    <div class="col-md-4">
                        <input id="textinput" name="textinput" type="text" placeholder="Adresse, lieu public, parcours..." class="form-control input-md">
                        <span class="help-block">Renseignez le point de rendez-vous</span>
                    </div>
                </div>

                <div class="form-group">
                    <!-- Event datetime -->
                    <label class="col-md-4 control-label">Date et heure</label>
                    <div class="col-md-4">
                        <input class="form-control" type="datetime-local" id="datetime">
                        <span class="help-block">Indiquez une date et une heure de rendez-vous</span>
                    </div>
                </div>

                <div class="form-group">
                    <!-- Event description -->
                    <label class="col-md-4 control-label" for="textarea">Description</label>
                    <div class="col-md-4">
                        <textarea class="form-control" id="textarea" name="Description" placeholder="Description"></textarea>
                        <span class="help-block">Décrivez l'évènement</span>
                    </div>
                </div>

                <div class="form-group">
                    <!-- Event theme -->
                    <label class="col-md-4 control-label" for="selectbasic">Thème</label>
                    <div class="col-md-4">
                        <select id="selectbasic" name="selectbasic" class="form-control">
                            <option value="1">Ramassage simple</option>
                            <option value="2">Ballade</option>
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
                    <button id="singlebutton" name="singlebutton" class="btn btn-success">Valider</button>
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
