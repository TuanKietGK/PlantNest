<?php
if(isset($_GET['xoa'])){
      $xuly->xoasp();
    }
?>
<?php 
     $adsp=$adm->adsp();
?>
        <h2><b>Sản phẩm</b></h2><a class="btn btn-primary" href="index.php?ctr=themsp">Thêm sản phẩm</a>
        <form method="get" action="index.php"><input name="searchsp" type="search"><input type="submit" value="search"></form>
        <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Stt</th>
        <th>Tên sản phẩm</th>
        <th>Danh mục</th>
        <th>Ảnh mô tả</th>
        <th>Ảnh bìa</th>
        <th>Giá</th>
        <th>Đã bán</th>
        <th>Cập nhật</th>
      </tr>
    </thead>
    <tbody>
      		<?php
					if(count($adsp)%7==0){
						$du=count($adsp)/7;
					}
					else{
						$du=((count($adsp)-(count($adsp)%7))/7)+1;
					}
					if(isset($_GET['trang'])){
						if($_GET['trang']==$du){
							for($i=(($_GET['trang']*7)-7);$i<count($adsp);$i++){
                echo '<tr>
                <td>'.($i+1).'</td>
                <td>'.$adsp[$i]['tensp'].'</td>
                <td>'.$adsp[$i]['danhmuc'].'</td>
                <td><img src="../'.$adsp[$i]['anh'].'"></td>
                <td><img src="../'.$adsp[$i]['anh0'].'"></td>
                <td>'.$adsp[$i]['gia'].'</td>
                <td>'.$adsp[$i]['daban'].'</td>
                <td><a href="index.php?ctr=capnhatsp&id='.$adsp[$i]['id_sp'].'" class="btn btn-warning">Cập nhật</a></td>
              </tr>';
							}
						}
						else{
							for($i=(($_GET['trang']*7)-7);$i<($_GET['trang']*7);$i++){
                echo '<tr>
                <td>'.($i+1).'</td>
                <td>'.$adsp[$i]['tensp'].'</td>
                <td>'.$adsp[$i]['danhmuc'].'</td>
                <td><img src="../'.$adsp[$i]['anh'].'"></td>
                <td><img src="../'.$adsp[$i]['anh0'].'"></td>
                <td>'.$adsp[$i]['gia'].'</td>
                <td>'.$adsp[$i]['daban'].'</td>
                <td><a href="index.php?ctr=capnhatsp&id='.$adsp[$i]['id_sp'].'" class="btn btn-warning">Cập nhật</a></td>
              </tr>';
							}
					
						}
					}
					else{
						if(count($adsp)>7){
							$dait=7;
						}
						else{
							$dait=count($adsp);
						}
						for($i=0;$i<$dait;$i++){
              echo '<tr>
              <td>'.($i+1).'</td>
              <td>'.$adsp[$i]['tensp'].'</td>
              <td>'.$adsp[$i]['danhmuc'].'</td>
              <td><img src="../'.$adsp[$i]['anh'].'"></td>
              <td><img src="../'.$adsp[$i]['anh0'].'"></td>
              <td>'.$adsp[$i]['gia'].'</td>
              <td>'.$adsp[$i]['daban'].'</td>
              <td><a href="index.php?ctr=capnhatsp&id='.$adsp[$i]['id_sp'].'" class="btn btn-warning">Cập nhật</a></td>
            </tr>';
						}
					}?>
    </tbody>
    </table>
			    <?php
					for($i=1;$i<=$du;$i++){
						if($i==1){
						echo '<ul class="pagination">';}
						if(isset($_GET['searchsp'])){
							echo '<li class="page-item"><a class="page-link"  href="index.php?ctr=sanpham&trang='.$i.'&searchsp='.$_GET['searchsp'].'">'.$i.'</a></li>';
						}
						else{
							echo '<li class="page-item"><a class="page-link"  href="index.php?ctr=sanpham&trang='.$i.'">'.$i.'</a></li>';
						}
						
					if($i==$du){echo'</ul>';}
					}?>