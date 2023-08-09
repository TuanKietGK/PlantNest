<?php 
    if(isset($_POST['ctr'])){
      if($_POST['ctr']=="themsp"){
    if(($_POST['tensp']=='')||($_POST['danhmuc']=='')||($_POST['anh']=='')||($_POST['anh0']=='')||($_POST['gia']=='')){
      $w='Bạn chưa điền đủ thông tin';
      require_once('sanpham/themsp.php');
    }
    else{
        $xuly->themsp();
        require_once('sanpham/sanpham.php');
    }}}
    else{
      require_once('sanpham/themsp.php');
    }
?>