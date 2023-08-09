<?php 
    if(isset($_POST['ctr'])){
        if($_POST['ctr']=="themtk"){
    if(($_POST['user']=='')||($_POST['email']=='')||($_POST['pass']=='')){
        $w='Bạn chưa điền đủ thông tin';
        require_once('taikhoan/themtk.php');
    }
    else{
        $xuly->themtk();
        require_once('taikhoan/taikhoan.php');
    }}}
    else{
        require_once('taikhoan/themtk.php');
    }
?>