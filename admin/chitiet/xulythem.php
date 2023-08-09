<?php 
   if(isset($_POST['ctr'])){
    if($_POST['ctr']=="themct"){
    if(($_POST['sanpham']=='')||($_POST['anh1']=='')||($_POST['anh2']=='')||($_POST['anh3']=='')){
        $w='Bạn chưa điền đủ thông tin';
        require_once('chitiet/themct.php');
    }
    else{
        $xuly->themct();
        require_once('chitiet/chitiet.php');
    }}}
    else{
        require_once('chitiet/themct.php');
    }
?>