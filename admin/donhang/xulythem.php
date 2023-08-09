<?php 
    if(isset($_POST['ctr'])){
        if($_POST['ctr']=="themdh"){
    $idkh=$xuly->idkh();
    if(($_POST['idkh']=='')||($_POST['tongtien']=='')||($_POST['ngaydat']=='')||($_POST['tinhtrang']=='')){
        $w='Bạn chưa điền đủ thông tin';
        require_once('donhang/themdh.php');
    }
    else if(in_array($_POST['idkh'],$idkh[0])==FALSE){
        $w='Không tồn tại id khách hàng';
         require_once('donhang/themdh.php');
    }
    else{
        $xuly->themdh();
        require_once('donhang/donhang.php');
    }}}
    else{
        require_once('donhang/themdh.php');
    }
?>