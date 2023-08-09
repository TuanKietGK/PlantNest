<?php 
    if(isset($_POST['ctr'])){
        if($_POST['ctr']=="capnhatkh"){
    if(($_POST['tenkh']=='')||($_POST['email']=='')||($_POST['sdt']=='')||($_POST['diachi']=='')){
        $w='Bạn chưa điền đủ thông tin';
        require_once('khachhang/capnhatkh.php');
    }
    else{
        $xuly->upkh();
        require_once('khachhang/khachhang.php');
    }}}
    else{
        require_once('khachhang/capnhatkh.php');
       }
?>