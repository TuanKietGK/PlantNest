<?php 
    if(isset($_POST['ctr'])){
        if($_POST['ctr']=="capnhattk"){
    if(($_POST['user']=='')||($_POST['email']=='')||($_POST['pass']=='')){
        $w='Bạn chưa điền đủ thông tin';
        require_once('taikhoan/capnhattk.php');
    }
    else{
        $xuly->uptk();
        require_once('taikhoan/taikhoan.php');
    }}}
   else{
    require_once('taikhoan/capnhattk.php');
   }
?>