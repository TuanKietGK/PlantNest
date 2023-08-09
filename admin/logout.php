<?php
  session_start();
  unset($_SESSION['user1']);
  unset($_SESSION['pass1']);
  require_once('index.php');
?>