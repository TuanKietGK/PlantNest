<?php 
    if(isset($_POST['ctr'])){
        if($_POST['ctr']=="themtr"){
    if($_POST['tinhtrang']==''){
    $w='Bạn chưa điền đủ thông tin';
    require_once('tinhtrangdh/themtr.php');
    }
    else{
        $xuly->themtr();
        require_once('tinhtrangdh/tinhtrang.php');
    }}}
    else{
        require_once('tinhtrangdh/themtr.php');
    }
?>