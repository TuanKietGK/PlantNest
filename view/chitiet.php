
    <div class="content-ct">
			<div class="container-fluid">
			<div class="row">
				<div class="col-md-5">
					<img src="<?php if(isset($_GET['mausac'])){echo $am['anh'];}else{echo $ct['anh'];} ?>">
				</div>
				<div class="col-md-7">
					<div class="container-fluid">
					<h3><?php echo $ct['tensp'] ?></h3>
					<p>Giá:&nbsp;<?php echo number_format($ct['gia']) ?><sup><b>đ</b></sup></p>
					<div class="row">
						<div class="col-md-3">
							Size 
						</div>
						<div class="col-md-9">
							<?php foreach ($kc as $key => $value) { ?>
								<a <?php if(isset($_GET['kichco'])){if($_GET['kichco']==$value['id_kichco']){echo 'style="background-color: black;color: white;"';}} ?> href="index.php?controller=chitiet&kichco=<?php echo $value['id_kichco'] ?>&dm=<?php echo $_GET['dm'] ?>&ct=<?php echo $_GET['ct'] ?><?php if(isset($_GET['mausac'])){echo '&mausac='.$_GET['mausac'];} ?>"><?php echo $value['kichco'] ?></a>
							<?php } ?>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							Màu 
						</div>
						<div class="col-md-9">
							<?php foreach ($ms as $key => $value) { ?>
								<a <?php if(isset($_GET['mausac'])){if($_GET['mausac']==$value['id_mausac']){echo 'style="background-color: black;color: white;"';}} ?> href="index.php?controller=chitiet&mausac=<?php echo $value['id_mausac'] ?>&dm=<?php echo $_GET['dm'] ?>&ct=<?php echo $_GET['ct'] ?><?php if(isset($_GET['kichco'])){echo '&kichco='.$_GET['kichco'];} ?>"><?php echo $value['mausac'] ?></a>
							<?php } ?>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							Số lượng 
						</div>
						<div class="col-md-9">
							<a href="index.php?controller=chitiet&tru=1&dm=<?php echo $_GET['dm'] ?>&sl=<?php echo $_GET['sl'] ?>&ct=<?php echo $_GET['ct'] ?><?php if(isset($_GET['kichco'])){echo '&kichco='.$_GET['kichco'];}?><?php if(isset($_GET['mausac'])){echo '&mausac='.$_GET['mausac'];}?>">-</a>
                            <span><?php echo $_GET['sl']?></span>&nbsp;
                            <a href="index.php?controller=chitiet&cong=1&dm=<?php echo $_GET['dm'] ?>&sl=<?php echo $_GET['sl'] ?>&ct=<?php echo $_GET['ct'] ?><?php if(isset($_GET['kichco'])){echo '&kichco='.$_GET['kichco'];}?><?php if(isset($_GET['mausac'])){echo '&mausac='.$_GET['mausac'];}?>">+</a>
							<?php echo $sl['soluong'] ?> sản phẩm có sẵn
						</div>
					</div>
					<div class="row">
						<div class="col-auto">
							<a href="index.php?controller=ttkhachhang&mua=1&xuly=muangay&add=<?php if(isset($_GET['mausac'])&&isset($_GET['kichco'])){ echo $sl['id_sl'];} ?>&dm=<?php echo $_GET['dm'] ?>&sl=<?php echo $_GET['sl'] ?>&ct=<?php echo $_GET['ct'] ?><?php if(isset($_GET['kichco'])){echo '&kichco='.$_GET['kichco'];}?><?php if(isset($_GET['mausac'])){echo '&mausac='.$_GET['mausac'];}?>" class="mua">Mua ngay</a>
						</div>
						<div class="col-auto">
							<a href="index.php?controller=chitiet&add=<?php if(isset($_GET['mausac'])&&isset($_GET['kichco'])){ echo $sl['id_sl'];} ?>&dm=<?php echo $_GET['dm'] ?>&sl=<?php echo $_GET['sl'] ?>&ct=<?php echo $_GET['ct'] ?><?php if(isset($_GET['kichco'])){echo '&kichco='.$_GET['kichco'];}?><?php if(isset($_GET['mausac'])){echo '&mausac='.$_GET['mausac'];}?>" class="cart">Thêm vào giỏ hàng</a>
						</div>
					</div>
					<div style="margin-top: 50px;margin-left: 7px;" class="row">
					<ul>
					<?php
						     if((isset($_GET['add'])||isset($_GET['mua']))&&(!isset($_GET['kichco']))){
								 echo '<li><b>Bạn chưa chọn kích cỡ</b></li>';
							 }
						   if((isset($_GET['add'])||isset($_GET['mua']))&&(!isset($_GET['mausac']))){
								echo '<li><b>Bạn chưa chọn màu sắc</b></li>';}?></ul>
					</div>
				</div>
				</div>
			</div>
		</div>
		<div class="content-mt">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-8">
						<p><b>Hướng dẫn chọn sản phẩm theo chiều cao, cân nặng và các thông số cơ thể:</b></p>
						<?php foreach ($hd as $key => $value) { ?>
							<img src="<?php echo $value['anh1'] ?>" alt="">
							<img src="<?php echo $value['anh2'] ?>" alt="">
                        <?php } ?>
						<?php foreach ($ac as $key => $value) { ?>
							<img src="<?php echo $value['anh1'] ?>" alt="">
							<img src="<?php echo $value['anh2'] ?>" alt="">
							<img src="<?php echo $value['anh3'] ?>" alt="">
                        <?php } ?>
					</div>
					<div class="col-md-3">
						<div class="container-fluid">
							<p><b>Sản phẩm liên quan</b></p>
							<?php 
							for($i=0;$i<5;$i++){
								echo '<div class="sp">
								<a href="index.php?controller=chitiet&ct='.$lk['id_sp'][$i].'&dm='.$lk['id_danhmuc'][$i].'"><img src="'.$lk['anh0'][$i].'"></a><br><br>
								<p><a href="index.php?controller=chitiet&ct='.$lk['id_sp'][$i].'&dm='.$lk['id_danhmuc'][$i].'" class="tensp"><b>'.$lk['tensp'][$i].'</b></a></p>
								<p>'.number_format($lk['gia'][$i]).'<sup><b>đ</b></sup></p>
							</div>';}
							 ?>
						</div>
					</div>
				</div>
			</div>
		</div>
			<div class="content-dm1">
		<div class="container">
			<h1>SẢN PHẨM BẠN ĐÃ XEM</h1>
			<div class="row">
            <?php 		
			            for($i=1;$i<5;$i++){
							for($j=0;$j<$da;$j++){
								if(isset($_SESSION['dx'][$i])){
								if($all['id_sp'][$j]==$_SESSION['dx'][$i]){
								echo '<div class="col-md-3">
								<a href="index.php?controller=chitiet&ct='.$all['id_sp'][$j].'&dm='.$all['id_danhmuc'][$j].'" class="hover_img"><img src="'.$all['anh0'][$j].'"><img src="'.$all['anh'][$j].'" class="hide"></a><br><br>
								<p><a href="index.php?controller=chitiet&ct='.$all['id_sp'][$j].'&dm='.$all['id_danhmuc'][$j].'"><b>'.$all['tensp'][$j].'</b></a></p>
								<p>'.number_format($all['gia'][$j]).'<sup><b>đ</b></sup></p>
							</div>';}}}
						} ?>
				
			</div>
		</div>
	</div>