<?php
    require_once('../model/database.php');
    $adm= new database();
    $xuly= new database();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/2669f91611.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: 'Poppins', sans-serif;
		}
		header{
			height: 80px;
			background-color: #343a40;
			display: flex;
			justify-content: space-between;
			align-items: center;	
		}
		header .logo{
			color: white;
			margin-left: 20px;
			cursor: pointer;
		}
		header .logo h3{
			font-size: 20px;
		}
		header .user{
			margin-right: 20px;
		}
		header .user a{
			text-decoration: none;
			color: #ffffff80;
			padding: 10px 10px;
		}
		header .user a:hover{
			color: white;
		}
		.row{
			width: 100%;
			height: 100%;
		}
		.row .col-2{
			height: 100%;
			width: 18%;
			background: black;
			float: left;
			clear: both;
		}
		.row .col-2 .sidebar a{
			padding: 20px;
			text-decoration: none;
			color: #ffffff80;
			font-size: 15px;
			display: block;
			width: 100%;
		}
		.row .col-2 .sidebar a:hover{
			color: white;
		}
		.col-10{
			width: 100%;
			height: 100%;
		}
    table{
         text-align: center;
       }
    table img{
         width: 100px;
         height: 80px;
       }
	</style>
</head>
<body>
	<header>
		<div class="logo">
			<h3>HKH Shop</h3>
		</div>
		<div class="user">
			<a href="index.php"><i class="fas fa-user-circle"><?php echo $_SESSION['user1'] ?></i> </a>
			<a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
		</div>
	</header>
	<div class="row">
		<div class="col-2">
			<ul class="sidebar">
                    <li>
                    <a href="index.php?ctr=home"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li>
                    <a href="index.php?ctr=banner"><i class="fas fa-images"></i> Banner</a>
                    </li>
                    <li>
                    <a href="index.php?ctr=danhmuc"><i class="fas fa-bars"></i> Danh mục</a>
                    </li>
                    <li>
                    <a href="index.php?ctr=sanpham"><i class="fas fa-tag"></i> Sản phẩm</a>
                    </li>
                    <li>
                    <a href="index.php?ctr=kichco"><i class="fas fa-window-maximize"></i> Kích cỡ</a>
                    </li>
                    <li>
                    <a href="index.php?ctr=mausac"><i class="fas fa-palette"></i> Màu sắc</a>
                    </li>
                    <li>
                    <a href="index.php?ctr=soluong"><i class="fas fa-calculator"></i> Số lượng</a>
                    </li>
                    <li>
                    <a href="index.php?ctr=chitiet"><i class="fas fa-image"></i> Ảnh chi tiết</a>
                    </li>
                    <li>
                    <a href="index.php?ctr=huongdan"><i class="fas fa-book-open"></i> Hướng dẫn</a>
                    </li>
                    <li>
                    <a href="index.php?ctr=khachhang"><i class="fas fa-user-friends"></i> Khách hàng</a>
                    </li>
                    <li>
                    <a href="index.php?ctr=taikhoan"><i class="fas fa-user"></i> Tài khoản</a>
                    </li>
                    <li>
                    <a href="index.php?ctr=donhang"><i class="fas fa-shopping-cart"></i> Đơn hàng</a>
                    </li>
                    <li>
                    <a href="index.php?ctr=ctdonhang"><i class="fas fa-shopping-cart"></i> Chi tiết đơn hàng</a>
                    </li>
                    <li>
                    <a href="index.php?ctr=tinhtrang"><i class="fas fa-car"></i> Tình trạng</a>
                    </li>
                    <li>
                    <a href="index.php?ctr=admin"><i class="fas fa-user-secret"></i> Admin</a>
                    </li>
                    <li></li><li></li><li></li><li></li><li></li><li></li><li></li>

			</ul>
		</div>
		<div class="col-10">
        <?php 
            if(isset($_GET['ctr'])){
               $ctr=$_GET['ctr'];}
            else if(isset($_POST['ctr'])){
              $ctr=$_POST['ctr'];
            }
            else{
               $ctr='home';}
            if(isset($_GET['searchsp'])){
              $ctr='sanpham';
            }
            if(isset($_GET['searchkc'])){
              $ctr='kichco';
            }
            if(isset($_GET['searchms'])){
              $ctr='mausac';
            }
            if(isset($_GET['searchsl'])){
              $ctr='soluong';
            }
            if(isset($_POST['sp'])){
              $ctr='themsl1';
            }
            if(isset($_GET['searchct'])){
              $ctr='chitiet';
            }
            if(isset($_GET['searchhd'])){
              $ctr='huongdan';
            }
            if(isset($_GET['searchtk'])){
              $ctr='taikhoan';
            }
            if(isset($_GET['searchctdh'])){
              $ctr='ctdonhang';
            }
            if(isset($_GET['searchkh'])){
              $ctr='khachhang';
            }
            if(isset($_GET['searchad'])){
              $ctr='admin';
            }
            
          switch($ctr){
            case 'home' :
              require_once('home.php');
            break;
            case 'sanpham' :
              require_once('sanpham/sanpham.php');
            break;
            case 'capnhatsp' :
              require_once('sanpham/xulycn.php');
            break;
            case 'themsp' :
              require_once('sanpham/xulythem.php');
            break;
            case 'danhmuc' :
              require_once('danhmuc/danhmuc.php');
            break;
            case 'capnhatdm' :
              require_once('danhmuc/xulycn.php');
            break;
            case 'themdm' :
              require_once('danhmuc/xulythem.php');
            break;
            case 'kichco' :
              require_once('kichco/kichco.php');
            break;
            case 'capnhatkc' :
              require_once('kichco/xulycn.php');
            break;
            case 'themkc' :
              require_once('kichco/xulythem.php');
            break;
            case 'mausac' :
              require_once('mausac/mausac.php');
            break;
            case 'capnhatms' :
              require_once('mausac/xulycn.php');
            break;
            case 'themms' :
              require_once('mausac/xulythem.php');
            break;
            case 'soluong' :
              require_once('soluong/soluong.php');
            break;
            case 'capnhatsl' :
              require_once('soluong/xulycn.php');
            break;
            case 'themsl' :
              require_once('soluong/themsl.php');
            break;
            case 'themsl1' :
              require_once('soluong/xulythem.php');
            break;
            case 'chitiet' :
              require_once('chitiet/chitiet.php');
            break;
            case 'capnhatct' :
              require_once('chitiet/xulycn.php');
            break;
            case 'themct' :
              require_once('chitiet/xulythem.php');
            break;
            case 'huongdan' :
              require_once('huongdan/huongdan.php');
            break;
            case 'capnhathd' :
              require_once('huongdan/xulycn.php');
            break;
            case 'themhd' :
              require_once('huongdan/xulythem.php');
            break;
            case 'khachhang' :
              require_once('khachhang/khachhang.php');
            break;
            case 'capnhatkh' :
              require_once('khachhang/xulycn.php');
            break;
            case 'themkh' :
              require_once('khachhang/xulythem.php');
            break;
            case 'donhang' :
              require_once('donhang/donhang.php');
            break;
            case 'capnhatdh' :
              require_once('donhang/xulycn.php');
            break;
            case 'themdh' :
              require_once('donhang/xulythem.php');
            break;
            case 'tinhtrang' :
              require_once('tinhtrangdh/tinhtrang.php');
            break;
            case 'capnhattr' :
              require_once('tinhtrangdh/xulycn.php');
            break;
            case 'themtr' :
              require_once('tinhtrangdh/xulythem.php');
            break;
            case 'banner' :
              require_once('banner/banner.php');
            break;
            case 'capnhatbn' :
              require_once('banner/xulycn.php');
            break;
            case 'thembn' :
              require_once('banner/xulythem.php');
            break;
            case 'taikhoan' :
              require_once('taikhoan/taikhoan.php');
            break;
            case 'capnhattk' :
              require_once('taikhoan/xulycn.php');
            break;
            case 'themtk' :
              require_once('taikhoan/xulythem.php');
            break;
            case 'admin' :
              require_once('admin/admin.php');
            break;
            case 'capnhatad' :
              require_once('admin/xulycn.php');
            break;
            case 'themad' :
              require_once('admin/xulythem.php');
            break;
            case 'ctdonhang' :
              require_once('ctdonhang/ctdonhang.php');
            break;
            default:
              echo 'loi trang';
            break; }?>
        </div>
	</div>
  <script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/chart.js/Chart.min.js"></script>
<script src="plugins/sparklines/sparkline.js"></script>
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="dist/js/adminlte.js"></script>
<script src="dist/js/demo.js"></script>
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>