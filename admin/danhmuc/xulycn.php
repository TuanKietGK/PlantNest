<?php 
    if(isset($_POST['ctr'])){
        if($_POST['ctr']=="capnhatdm"){
    if($_POST['tendm']==''){
        $w='Bạn chưa điền đủ thông tin';
        require_once('danhmuc/capnhatdm.php');
    }
    else{
        $xuly->updm();
        require_once('danhmuc/danhmuc.php');
    }}}
    else{
        require_once('danhmuc/capnhatdm.php');
       }
?>