<?php
     session_start();
     require_once('../model/database.php');
     $xuly=new database();
     $adus=$xuly->adus();
     if(($_POST['user']=='')||($_POST['pass']=='')){
         $w='Chưa điền tên đăng nhập hoặc mật khẩu';
         require_once('login.php');
     }
     else if($adus==null){
        $w='Sai tên đăng nhập hoặc mật khẩu';
        require_once('login.php');
     }
     else{
         $user1=$_POST['user'];
         $pass1=$_POST['pass'];
         require_once('index.php');
     }
     
?>