<?php
   if (session_status() === PHP_SESSION_NONE) {
    session_start();
   }
   require_once('model/database.php');
   $obj= new database(); 
   if(isset($user)&&isset($pass)){
    $_SESSION['user']=$user;
    $_SESSION['pass']=$pass; 
   }
   if(isset($_GET['dangxuat'])){
    if($_GET['dangxuat']=='true'){
      unset($_SESSION['user']);
      unset($_SESSION['pass']);
    } 
  }
  if(isset($_GET['xuly'])){
    if($_GET['xuly']=='muangay'){
   if(isset($_GET['mausac'])&&isset($_GET['kichco'])){
    $ct=$obj->chitiet();
    $am=$obj->anhmau();
    $sl=$obj->soluong();
    $kc2=$obj->kichco2();
    $slmax=$obj->slmax();
    require_once('controller/C_addgiohang.php');
   }
    }
  }
   ?>

<?php
    if(isset($_GET['controller'])){
      $ctr =$_GET['controller'];
    }
    else{
      $ctr='trangchu';
    }
    if(isset($_GET['search'])){
     $ctr='danhmuc';}
     if(isset($ctr)){
     switch($ctr){
      case 'chitiet' :
        require_once('controller/C_chitiet.php');
        break;
      case 'giohang' :
        require_once('controller/C_giohang.php');
        break;
      default:
         break; }}
    if(isset($_POST['controller'])){
      if($_POST['controller']=='ttkhachhang'){
        $ctr='ttkhachhang';} }
         ?>

<?php require('view/header.php'); ?>

  
<?php
   switch($ctr){
      case 'trangchu' :
        require_once('controller/C_trangchu.php');
        break;
      case 'danhmuc' :
        require_once('controller/C_danhmuc.php');
        break;
      case 'chitiet' :
        require_once('view/chitiet.php');
        break;
      case 'giohang' :
        require_once('view/giohang.php');
        break;
      case 'ttkhachhang' :
        require_once('controller/C_ttkhachhang.php');
        break;
      default:
         echo 'loi trang';
         break; }?>

<?php 
   require_once('view/footer.php');
?>