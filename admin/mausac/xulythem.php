<?php 
   if(isset($_POST['ctr'])){
    if($_POST['ctr']=="themms"){
    if(($_POST['tenms']=='')||($_POST['sanpham']=='')||($_POST['anh']=='')){
        $w='Bạn chưa điền đủ thông tin';
        require_once('mausac/themms.php');
    }
    else{
        $xuly->themms();
        require_once('mausac/mausac.php');
    }}}
    else{
        require_once('mausac/themms.php');
    }
?>