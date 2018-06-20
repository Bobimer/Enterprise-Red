<?php

if(isset($_POST['login'])) {
  login($_POST['mail'], $_POST['pwd']);
}else {
  if(isset($_COOKIE['mail']) && isset($_COOKIE['pwd'])) {
    login($_COOKIE['mail'], $_COOKIE['pwd'], true);
  }
}

