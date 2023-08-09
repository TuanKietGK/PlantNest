
	<div class="content-dm">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3 col-sm-12 col-xs-12 col-xl-3">
					<h3>Danh mục</h3>
					<p><a href="index.php?controller=danhmuc&danhmuc='ÁO SƠ MI'">Áo sơ mi</a></p>
					<p><a href="index.php?controller=danhmuc&danhmuc='Polo and T-shirts'">Polo and T-shirts</a></p>
					<p><a href="index.php?controller=danhmuc&danhmuc='Quần kaki'">Quần kaki</a></p>
					<p><a href="index.php?controller=danhmuc&danhmuc='Quần jeans'">Quần jeans</a></p>
					<p><a href="index.php?controller=danhmuc&danhmuc='Quần âu'">Quần âu</a></p>
				</div>
				<div class="col-md-9 col-sm-12 col-xs-12 col-xl-8">
				<?php
					if($dai%9==0){
						$du=$dai/9;
					}
					else{
						$du=(($dai-($dai%9))/9)+1;
					}
					if(isset($_GET['trang'])){
						if($_GET['trang']==$du){
							for($i=(($_GET['trang']*9)-9);$i<$dai;$i++){
								if($i%3==0){
									echo '<div class="row">';
								}
								echo '<div class="col-md-4 col-6">
								<a href="index.php?ct='.$damuc['id_sp'][$i].'&dm='.$damuc['id_danhmuc'][$i].'&controller=chitiet" class="hover_img"><img src="'.$damuc['anh0'][$i].'"><img src="'.$damuc['anh'][$i].'" class="hide"></a><br><br>
								<a href="index.php?controller=chitiet&ct='.$damuc['id_sp'][$i].'&dm='.$damuc['id_danhmuc'][$i].'"><b>'.$damuc['tensp'][$i].'</b></a>
								<p>'.number_format($damuc['gia'][$i]).'<sup><b>đ</b></sup></p>
							</div>';
							if(($i+1)%3==0||$i==($dai-1)){
							  echo '</div>';
						  }
							}
						}
						else{
							for($i=(($_GET['trang']*9)-9);$i<($_GET['trang']*9);$i++){
								if($i%3==0){
									echo '<div class="row">';
								}
								echo '<div  class="col-md-4 col-6">
								<a href="index.php?controller=chitiet&ct='.$damuc['id_sp'][$i].'&dm='.$damuc['id_danhmuc'][$i].'" class="hover_img"><img src="'.$damuc['anh0'][$i].'"><img src="'.$damuc['anh'][$i].'" class="hide"></a><br><br>
								<a href="index.php?controller=chitiet&ct='.$damuc['id_sp'][$i].'&dm='.$damuc['id_danhmuc'][$i].'"><b>'.$damuc['tensp'][$i].'</b></a>
								<p>'.number_format($damuc['gia'][$i]).'<sup><b>đ</b></sup></p>
							</div>';
							if(($i+1)%3==0||$i==($dai-1)){
							  echo '</div>';
						  }
							}
					
						}
					}
					else{
						if($dai>9){
							$dait=9;
						}
						else{
							$dait=$dai;
						}
						for($i=0;$i<$dait;$i++){
							if($i%3==0){
								echo '<div class="row">';
							}
							echo '<div  class="col-md-4 col-6">
							<a href="index.php?controller=chitiet&ct='.$damuc['id_sp'][$i].'&dm='.$damuc['id_danhmuc'][$i].'" class="hover_img"><img src="'.$damuc['anh0'][$i].'"><img src="'.$damuc['anh'][$i].'" class="hide"></a><br><br>
							<a href="index.php?controller=chitiet&ct='.$damuc['id_sp'][$i].'&dm='.$damuc['id_danhmuc'][$i].'"><b>'.$damuc['tensp'][$i].'</b></a>
							<p>'.number_format($damuc['gia'][$i]).'<sup><b>đ</b></sup></p>
						</div>';
						if(($i+1)%3==0||$i==($dai-1)){
						  echo '</div>';
					  }
						}
					}
			
					for($i=1;$i<=$du;$i++){
						if($i==1){
						echo '<div class="page">';}
						if(isset($_GET['danhmuc'])){
                            echo '<a href="index.php?controller=danhmuc&trang='.$i.'&danhmuc='.$_GET['danhmuc'].'">'.$i.'</a>';
						}
						else if(isset($_GET['search'])){
							echo '<a href="index.php?controller=danhmuc&trang='.$i.'&search='.$_GET['search'].'">'.$i.'</a>';
						}
						else{
							echo '<a href="index.php?controller=danhmuc&trang='.$i.'">'.$i.'</a>';
						}
						
					if($i==$du){echo'</div>';}
					}
			  
				  ?>
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
						echo '<div class="col-md-3 col-6">
						<a href="index.php?controller=chitiet&ct='.$all['id_sp'][$j].'&dm='.$all['id_danhmuc'][$j].'" class="hover_img"><img src="'.$all['anh0'][$j].'"><img src="'.$all['anh'][$j].'" class="hide"></a><br><br>
						<a class="tensp" href="index.php?controller=chitiet&ct='.$all['id_sp'][$j].'&dm='.$all['id_danhmuc'][$j].'"><b>'.$all['tensp'][$j].'</b></a>
						<p>'.number_format($all['gia'][$j]).'<sup><b>đ</b></sup></p></div>';}}}} ?></div>
		</div>
	</div>