<?php
// Starts the session
session_start();

// Destroys the session to log out
session_destroy();

// Heads to ok_logout.php
header('Location: ../ok_logout.php');
exit;