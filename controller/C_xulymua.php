<?php
    $xuly= new database();
    $slmax=$xuly->slmax();
    $t=0;
    for($i=1;$i<=$slmax;$i++){
        if(isset($_SESSION['gh'][$i])){
            $t+=1;
        }}
    if($t>0){
    $slmax=$obj->slmax();
    require_once('view/ttkhachhang.php');
    }
    else{
        require_once('controller/C_giohang.php');
        require_once('view/giohang.php');
    }
?>
