<?php 
    if(isset($_POST['ctr'])){
        if($_POST['ctr']=="themhd"){
    if(($_POST['danhmuc']=='')||($_POST['anh1']=='')||($_POST['anh2']=='')){
        $w='Bạn chưa điền đủ thông tin';
        require_once('huongdan/themhd.php');
    }
    else{
        $xuly->themhd();
        require_once('huongdan/huongdan.php');
    }}}
    else{
        require_once('huongdan/themhd.php');
    }
?>