<?php 
    if(isset($_POST['ctr'])){
        if($_POST['ctr']=="capnhatkc"){
    if(($_POST['tenkc']=='')||($_POST['danhmuc']=='')){
        $w='Bạn chưa điền đủ thông tin';
        require_once('kichco/capnhatkc.php');
    }
    else{
        $xuly->upkc();
        require_once('kichco/kichco.php');
    }}}
    else{
        require_once('kichco/capnhatkc.php');
       }
?>