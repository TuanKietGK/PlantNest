<?php
    if(isset($_GET['xuly'])){
      if($_GET['xuly']=='muangay'){
        require_once('controller/C_xulymuangay.php');
      }
      if($_GET['xuly']=='mua'){
        require_once('controller/C_xulymua.php');
      }
    }
    if(isset($_POST['controller'])){
      if($_POST['controller']=='ttkhachhang'){
        require_once('controller/C_xulytt.php');
      } 
    }
    if(!isset($_GET['xuly'])&&!isset($_POST['controller'])){
      $slmax=$obj->slmax();
    require_once('view/ttkhachhang.php');
    }
   
?>