<?php 
    if(isset($_POST['ctr'])){
        if($_POST['ctr']=="themkh"){
    if(($_POST['tenkh']=='')||($_POST['diachi']=='')||($_POST['sdt']=='')||($_POST['email']=='')){
        $w='Bạn chưa điền đủ thông tin';
        require_once('khachhang/themkh.php');
    }
    else{
        $xuly->themkh();
        require_once('khachhang/khachhang.php');
    }}}
    else{
        require_once('khachhang/themkh.php');
    }
?>