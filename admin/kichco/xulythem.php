<?php 
    if(isset($_POST['ctr'])){
        if($_POST['ctr']=="themkc"){
    if(($_POST['tenkc']=='')||($_POST['danhmuc']=='')){
        $w='Bạn chưa điền đủ thông tin';
        require_once('kichco/themkc.php');
    }
    else{
        $xuly->themkc();
        require_once('kichco/kichco.php');
    }}}
    else{
        require_once('kichco/themkc.php');
    }
?>