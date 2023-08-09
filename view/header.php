<!DOCTYPE html>
<html>
<head>
	<title>Trang chu</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/2669f91611.js" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<script src="JS.js"></script>
</head>
<body>
	<header>
		<div class="menu">
			<a href="index.php?controller=trangchu"><img src="images/logo.jpg"></a>
			<ul class="nav-links">
				<li class="under"><a href="index.php?controller=trangchu">Trang chủ</a></li>
				<li class="under"><a href="index.php?controller=danhmuc&danhmuc='ÁO SƠ MI'">Áo</a>
					<div class="sub-menu">
						<ul>
							<li><a href="index.php?controller=danhmuc&danhmuc='ÁO SƠ MI'">Áo sơ mi</a>
							</li>
							<li><a href="index.php?controller=danhmuc&danhmuc='Polo and T-shirts'">Polo & T-Shirts</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="under"><a href="index.php?controller=danhmuc&danhmuc='Quần kaki'">Quần</a>
					<div class="sub-menu">
						<ul>
							<li><a href="index.php?controller=danhmuc&danhmuc='Quần kaki'">Quần kaki</a></li>
							<li><a href="index.php?controller=danhmuc&danhmuc='Quần jeans'">Quần jeans</a></li>
							<li><a href="index.php?controller=danhmuc&danhmuc='Quần âu'">Quần shorts</a></li>
						</ul>
					</div>	
				</li>
				<li class="under"><a href="index.php">About us</a></li>
				<li class="dropdown">
					<a href="index.php" class="dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton"><i class="fa fa-search"></i></a>
					<form action="index.php" method="get" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="keyword..." value="<?php echo isset($_GET['search'])?$_GET['search']:'' ?>" name="search">
                			<div class="input-group-append">
                    			<button class="btn btn-secondary" type="submit" value="search"> 
                        		<i class="fa fa-search"></i>
                    			</button>
                			</div>
                		</div>
                	</form>
				</li>
				<?php if(isset($_SESSION['user'])){ echo '<li>'.$_SESSION['user'].'</li>';}else{echo '<li class="under"><a href="dangnhap.php">Đăng nhập</a></li>';}?>
				<li class="under"><?php if(isset($_SESSION['user'])){ echo '<a href="index.php?dangxuat=true">Đăng xuất</a>';}else{echo '<a href="dangky.php">Đăng ký</a>';}?></li>
				<li><a href="index.php?controller=giohang"><i class="fa fa-shopping-cart"></i></a></li>(<?php if(isset($_SESSION['gh'])) {echo count($_SESSION['gh']);}else{echo 0;}?>)
			</ul>
			<label for="nav-mobile-input" class="nav-btn">
				<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg>
			</label>
			<input type="checkbox" class="nav-input" id="nav-mobile-input" hidden name="">
			<label for="nav-mobile-input" class="nav-overlay"></label>
			<div class="nav-mobile">
				<label for="nav-mobile-input" class="nav-mobile-close">
					<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" class="svg-inline--fa fa-times fa-w-11" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg>
				</label>
				<ul class="nav-mobile-links">
					<h3>HKH Shop</h3>
					<li>
					<form action="index.php" method="get">
					<div class="search">
					<div><input  type="text" value="<?php echo isset($_GET['search'])?$_GET['search']:'' ?>" name="search" placeholder="key word..."></div><div><button class="btn"  type="submit"><i class="fa fa-search"></i></button></div></div>
                	</form>
					</li>
				<?php if(isset($_SESSION['user'])){ echo '<li>'.$_SESSION['user'].'</li>';}else{echo '<li><a href="dangnhap.php">Đăng nhập</a></li>';}?>
				<li><?php if(isset($_SESSION['user'])){ echo '<a href="index.php?dangxuat=true">Đăng xuất</a>';}else{echo '<a href="dangky.php">Đăng ký</a>';}?></li>
					<li><a href="index.php?controller=trangchu">Trang chủ</a></li>
					<li><a href="index.php?controller=danhmuc&danhmuc='ÁO SƠ MI'">Áo</a></li>
					<li><a href="index.php?controller=danhmuc&danhmuc='Quần kaki'">Quần</a></li>
					<li><a href="index.php">About Us</a></li>
					<li><a href="index.php?controller=giohang">Giỏ hàng</a></li>
				</ul>
			</div>
		</div>

	</header>