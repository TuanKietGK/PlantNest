<?php 
    if(isset($_POST['ctr'])){
        if($_POST['ctr']=="capnhatbn"){
    if($_POST['banner']==''){
        $w='Bạn chưa điền đủ thông tin';
        require_once('banner/capnhatbn.php');
    }
    else{
        $xuly->upbn();
        require_once('banner/banner.php');
    }}}
    else{
        require_once('banner/capnhatbn.php');
       }
?>