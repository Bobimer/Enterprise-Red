<?php
// For the session to be active
session_start();

// Dabatase connection include
include('includes/db_connect.inc.php');

// Database connection
$db = db_connect();

// Get input values
$name = $_GET['name'];
$place = $_GET['place'];
$date = $_GET['date'];
$theme = $_GET['theme'];
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
    <title>Rechercher un évènement - Greenings</title>
    
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
      <!-- Method get to request data -->
      <form method="get" action="search.php" class="form-horizontal">
        <fieldset>
          <!-- Form Name -->
          <legend>Rechercher un évènement</legend>

          <div class="form-group">
            <!-- Event name -->
            <label class="col-md-4 control-label" for="name">Nom de l'évènement</label>
            <div class="col-md-4">
              <!-- Echoing fetched name -->
              <input id="name" name="name" type="text" placeholder="Nom de l'évènement" class="form-control input-md" value="<?php echo $name ?>">
            </div>
          </div>

          <div class="form-group">
            <!-- Event location -->
            <label class="col-md-4 control-label" for="place">Lieu</label>
            <div class="col-md-4">
              <!-- Echoing fetched place -->
              <input id="place" name="place" type="text" placeholder="Adresse, lieu public, parcours..." class="form-control input-md" value="<?php echo $place ?>">
            </div>
          </div>

          <div class="form-group">
            <!-- Event datetime -->
            <label class="col-md-4 control-label" for="date">Date</label>
            <div class="col-md-4">
              <!-- Echoing fetched date -->
              <input id="date" name="date" type="date" class="form-control" value="<?php echo $date ?>">
            </div>
          </div>

          <div class="form-group">
            <!-- Event theme -->
            <label class="col-md-4 control-label" for="theme">Thème</label>
            <div class="col-md-4">
              <select id="theme" name="theme" class="form-control" value="">
                <!-- Selecting values and then echoing fetched values -->
                <option value=""></option>
                <option <?php if($theme == "Ramassage simple") echo "selected" ?> value="Ramassage simple">
                Ramassage simple</option>
                <option <?php if($theme == "Balade") echo "selected" ?> value="Balade">Balade</option>
                <option <?php if($theme == "Ludique") echo "selected" ?> value="Ludique">Ludique</option>
                <option <?php if($theme == "Sport") echo "selected" ?> value="Sport">Sport</option>
                <option <?php if($theme == "Autres") echo "selected" ?> value="Autres">Autres</option>
              </select>
            </div>
          </div>
          
          <!-- Search button -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton"></label>
            <div class="col-md-4">
              <button type="submit" id="singlebutton" class="btn btn-success">Recherche</button>
            </div>
          </div>
          
        </fieldset>
      </form>

      <!-- Fetch from database with input values -->
      <?php 
        $req = $db->prepare("SELECT * FROM events WHERE (event_name LIKE :name) AND (event_place LIKE :place) AND (event_date LIKE :date) AND (event_theme LIKE :theme)");
        $req->execute(array(
            "name" => '%'.$name.'%',
            "place" => '%'.$place.'%',
            "date" => '%'.$date.'%',
            "theme" => '%'.$theme.'%'
        ));

        while($result = $req->fetch()) {
        ?>
          <div class='col-lg-4'>
            <div class='col-lg-12 sevent'>
              <!-- Display fetched name -->
              <p id="eventname"><?= $result['event_name'] ?></p>
              <!-- Display fetched place -->
              <p><?= $result['event_place']?></p>
              <!-- Access fetched event -->
              <p><a class='btn btn-success' href='event.php?id=<?=$result['id_event']?>' role='button'>Voir cet évènement &raquo;</a></p>
            </div>
          </div>
        <?php } ?>
      
      </div>
    </div>

    <!-- Footer include -->
    <?php include('includes/footer.inc.php'); ?>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
