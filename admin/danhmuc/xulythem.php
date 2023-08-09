<?php 
    if(isset($_POST['ctr'])){
        if($_POST['ctr']=="themdm"){
    if($_POST['tendm']==''){
        $w='Bạn chưa điền đủ thông tin';
        require_once('danhmuc/themdm.php');
    }
    else{
        $xuly->themdm();
        require_once('danhmuc/danhmuc.php');
    }}}
    else{
        require_once('danhmuc/themdm.php');
    }
?>