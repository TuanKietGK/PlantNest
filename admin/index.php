<?php
    if (session_status() === PHP_SESSION_NONE) {
      session_start();
     }
   if(isset($user1)&&isset($pass1)){
      $_SESSION['user1']=$user1;
      $_SESSION['pass1']=$pass1;
   }
   if(!isset($_SESSION['user1'])&&!isset($_SESSION['pass1'])){
         require_once('login.php');
   }
   else{    
       require_once('admin.php');
   }
?>
