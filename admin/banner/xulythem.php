<?php 
    if(isset($_POST['ctr'])){
        if($_POST['ctr']=="thembn"){
    if($_POST['banner']==''){
        $w='Bạn chưa điền đủ thông tin';
        require_once('banner/thembn.php');
    }
    else{
        $xuly->thembn();
        require_once('banner/banner.php');
    }}}
    else{
        require_once('banner/thembn.php');
    }
?>