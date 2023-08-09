<?php 
    if(isset($_POST['ctr'])){
        if($_POST['ctr']=="capnhatad"){
    if(($_POST['user']=='')||($_POST['pass']=='')){
        $w='Bạn chưa điền đủ thông tin';
        require_once('admin/capnhatad.php');
    }
    else{
        $xuly->upad();
        require_once('admin/admin.php');
    }}}
    else{
        require_once('admin/capnhatad.php');
       }
?>