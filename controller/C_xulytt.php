<?php
 
  if(($_POST['tenkh']=='')||($_POST['diachi']=='')||($_POST['sdt']=='')||($_POST['email']=='')){
    $w='Bạn chưa điền đủ thông tin';
    $slmax=$obj->slmax();
    require_once('view/ttkhachhang.php');
  }
  else if(strlen(strval($_POST['sdt']))!=10){
    $w='Số điện thoại phải có 10 số';
    $slmax=$obj->slmax();
    require_once('view/ttkhachhang.php');
  }
  else{
    $xuly= new database();
    $slmax=$xuly->slmax();
     $xuly->themkh();
     $lastidkh=$xuly->conn->insert_id;
     $tong=0;
     for($i=1;$i<=$slmax;$i++){
        if(isset($_SESSION['gh'][$i])){
            $tong+=($_SESSION['gh'][$i]['gia']*$_SESSION['gh'][$i]['sl']);
        }};
    date_default_timezone_set("asia/ho_chi_minh");
    $ngaydat=date('Y-m-d H:i:s');
    $sql="INSERT INTO donhang(id_kh,tongtien,id_tinhtrang,ngaydat) VALUES($lastidkh,$tong,4,'$ngaydat')";
    $xuly->conn->query($sql);
    $lastiddh=$xuly->conn->insert_id;
    for($i=1;$i<=$slmax;$i++){
        if(isset($_SESSION['gh'][$i])){
            $id_sl= $_SESSION['gh'][$i]['id_sl'];
            $id_sp= $_SESSION['gh'][$i]['id_sp'];
            $slcl= ($_SESSION['gh'][$i]['slmax']-$_SESSION['gh'][$i]['sl']);
            $daban= ($_SESSION['gh'][$i]['daban']+$_SESSION['gh'][$i]['sl']);
            $tonggia=($_SESSION['gh'][$i]['gia']*$_SESSION['gh'][$i]['sl']);
            $soluong=$_SESSION['gh'][$i]['sl'];
            $sql="INSERT INTO ctdonhang(id_sl,id_donhang,soluong,tonggia) VALUES($id_sl,$lastiddh,$soluong,$tonggia)";
            $xuly->conn->query($sql);
            $sql1="UPDATE soluong set soluong=$slcl where id_sl=$id_sl";
            $xuly->conn->query($sql1);
            $sql2="UPDATE sanpham set daban=$daban where id_sp=$id_sp";
            $xuly->conn->query($sql2);
        }};
     unset($_SESSION['gh']);
     $s='Đặt hàng thành công';
     require_once('controller/C_trangchu.php');
    }
?>