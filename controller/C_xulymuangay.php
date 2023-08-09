<?php
   if(!isset($_GET['kichco'])){
    require_once('controller/C_chitiet.php');
    require_once('view/chitiet.php');
   }
   else if(!isset($_GET['mausac'])){
    require_once('controller/C_chitiet.php');
    require_once('view/chitiet.php');
   }
   else{
    require_once('view/ttkhachhang.php');
   }
?>