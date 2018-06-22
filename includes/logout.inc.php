<?php

    session_start();
    session_destroy();
    header('Location: ../ok_logout.php');
    exit;
