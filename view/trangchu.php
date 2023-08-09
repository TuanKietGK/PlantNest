<div id="banner" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  		<ul class="carousel-indicators">
   			<li data-target="#banner" data-slide-to="1" class="active"></li>
    		<li data-target="#banner" data-slide-to="2"></li>
    		<li data-target="#banner" data-slide-to="3"></li>
    		<li data-target="#banner" data-slide-to="4"></li>
    		<li data-target="#banner" data-slide-to="5"></li>
  		</ul>

  <!-- The slideshow -->
  		<div class="carousel-inner">
    		<div class="carousel-item active">
      			<img src="<?php echo $banner[0]['banner'] ?>">
    		</div>
			<?php 
			  for($i=1;$i<count($banner);$i++){
    		    echo '<div class="carousel-item ">
      			        <img src="'.$banner[$i]['banner'].'">
    		        </div>';}?>
  		</div>

  <!-- Left and right controls -->
  		<a class="carousel-control-prev" href="#banner" data-slide="prev">
   		<span class="carousel-control-prev-icon"></span>
 		 </a>
  		<a class="carousel-control-next" href="#banner" data-slide="next">
    	<span class="carousel-control-next-icon"></span>
  		</a>
	</div>
	<div class="content">
		<div class="container">
			<div class="content__nd1">
				<h1>Hàng mới về</h1><br>
				<?php
				  		for($i=0;$i<8;$i++){
							if($i%4==0){
								echo '<div class="row">';
							}
							echo '<div class="col-md col-5 col-xl">
							<a href="index.php?controller=chitiet&ct='.$mv['id_sp'][$i].'&dm='.$mv['id_danhmuc'][$i].'" class="hover_img"><img src="'.$mv['anh0'][$i].'"><img src="'.$mv['anh'][$i].'" class="hide"></a><br><br>
							<a class="tensp" href="index.php?controller=chitiet&ct='.$mv['id_sp'][$i].'&dm='.$mv['id_danhmuc'][$i].'"><b>'.$mv['tensp'][$i].'</b></a><br><br>
							<p>'.number_format($mv['gia'][$i]).'<sup><b>đ</b></sup></p>
						</div>';
						if(($i+1)%4==0){
						  echo '</div>';
					  }
						}
				 ?>
			</div>
			<div class="content__nd2">
				<h1>Bán chạy</h1><br>
				<?php
				  		for($i=0;$i<8;$i++){
							if($i%4==0){
								echo '<div class="row">';
							}
							echo '<div class="col-md col-5 col-xl">
							<a href="index.php?controller=chitiet&ct='.$bc['id_sp'][$i].'&dm='.$bc['id_danhmuc'][$i].'" class="hover_img"><img src="'.$bc['anh0'][$i].'"><img src="'.$bc['anh'][$i].'" class="hide"></a><br><br>
							<a class="tensp" href="index.php?controller=chitiet&ct='.$bc['id_sp'][$i].'&dm='.$bc['id_danhmuc'][$i].'"><b>'.$bc['tensp'][$i].'</b></a><br><br>
							<p>'.number_format($bc['gia'][$i]).'<sup><b>đ</b></sup></p>
						</div>';
						if(($i+1)%4==0){
						  echo '</div>';
					  }
						}
				 ?>
			</div>
		</div>
	</div>
	<?php if(isset($s)){
		echo '<script>alert("'.$s.'")</script>';
	} ?>
	