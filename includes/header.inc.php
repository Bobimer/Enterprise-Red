<!-- Header -->
<header>
      <div class="container">
          <div class="header clearfix">
              <nav>
                <?php
                session_start();
                if (isset($_SESSION['id_user'])) {
                  echo
                  '<!-- Show account -->
                  <ul class="nav nav-pills pull-right">
                    <li role="account"><a href="profile.php" id="account">Compte</a></li>
                    <li role="disconnect"><a href="includes/logout.inc.php" id="disconnect">Déconnexion</a></li>
                  </ul>';
                } else {
                  echo
                  '<!-- Connexion/Inscription links -->
                  <ul class="nav nav-pills pull-right">
                    <li role="login"><a href="login.php" id="login">Connexion</a></li>
                    <li role="signup"><a href="signup.php" id="signup">Inscription</a></li>
                  </ul>';
                }
                ?>
              </nav>
              <!-- Title and link to homepage -->
          <h3 class="text-muted"> <a href="index.php" id="title">Greenings</a></h3>
      </div>
  </div>
</header>