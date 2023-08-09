<?php 
    if(isset($_POST['ctr'])){
        if($_POST['ctr']=="capnhatms"){
    if(($_POST['tenms']=='')||($_POST['sanpham']=='')||($_POST['anh']=='')){
        $w='Bạn chưa điền đủ thông tin';

        require_once('mausac/capnhatms.php');
    }
    else{
        $xuly->upms();
        require_once('mausac/mausac.php');
    }}}
    else{
        require_once('mausac/capnhatms.php');
       }
?>