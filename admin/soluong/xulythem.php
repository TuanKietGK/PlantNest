<?php 
    if(isset($_POST['ctr'])){
    if($_POST['ctr']=="themsl1"){
    if(($_POST['mausac']=='')||($_POST['kichco']=='')||($_POST['soluong']=='')){
        $w='Bạn chưa điền đủ thông tin';
        require_once('soluong/themsl1.php');
    }
    else{
        $xuly->themsl();
        require_once('soluong/soluong.php');
    }}}
    else{
        require_once('soluong/themsl1.php');
    }
?>