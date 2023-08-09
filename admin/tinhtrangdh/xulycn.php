<?php 
   if(isset($_POST['ctr'])){
       if($_POST['ctr']=="capnhattr"){
    if($_POST['tinhtrang']==''){
       $w='Bạn chưa điền đủ thông tin';
       require_once('tinhtrangdh/capnhattr.php');
    }
    else{
        $xuly->uptr();
        require_once('tinhtrangdh/tinhtrang.php');;
    }}}
    else{
        require_once('tinhtrangdh/capnhattr.php');
    }
?>