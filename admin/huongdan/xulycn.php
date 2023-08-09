<?php 
    if(isset($_POST['ctr'])){
        if($_POST['ctr']=="capnhathd"){
    if(($_POST['danhmuc']=='')||($_POST['anh1']=='')||($_POST['anh2']=='')){
        $w='Bạn chưa điền đủ thông tin';
        require_once('huongdan/capnhathd.php');
    }
    else{
        $xuly->uphd();
        require_once('huongdan/huongdan.php');
    }}}
    else{
        require_once('huongdan/capnhathd.php');
       }
?>