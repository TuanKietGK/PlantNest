<?php 
    if(isset($_POST['ctr'])){
        if($_POST['ctr']=="capnhatsl"){
    if($_POST['soluong']==''){
        $w='Bạn chưa điền đủ thông tin';
        require_once('soluong/capnhatsl.php');
    }
    else{
        $xuly->upsl();
        require_once('soluong/soluong.php');
    }}}
    else{
        require_once('soluong/capnhatsl.php');
       }
?>