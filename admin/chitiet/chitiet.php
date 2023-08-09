<?php
if(isset($_GET['xoa'])){
      $xuly->xoact();
    }
?>
<?php 
     $adct=$adm->adct();
?>
        <h2><b>Ảnh chi tiết</b></h2><a class="btn btn-primary" href="index.php?ctr=themct">Thêm chi tiết</a>
        <form method="get" action="index.php"><input name="searchct" type="search"><input type="submit" value="search"></form>
        <table  class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Stt</th>
		    <th>Tên sản phẩm</th>
        <th>Chi tiết 1</th>
        <th>Chi tiết 2</th>
        <th>Chi tiết 3</th>
        <th>Cập nhật</th>
      </tr>
    </thead>
    <tbody>
      		<?php
					if(count($adct)%7==0){
						$du=count($adct)/7;
					}
					else{
						$du=((count($adct)-(count($adct)%7))/7)+1;
					}
					if(isset($_GET['trang'])){
						if($_GET['trang']==$du){
							for($i=(($_GET['trang']*7)-7);$i<count($adct);$i++){
                echo '<tr>
                <td>'.($i+1).'</td>
                <td>'.$adct[$i]['tensp'].'</td>
                <td><img src="../'.$adct[$i]['anh1'].'"></td>
                <td><img src="../'.$adct[$i]['anh2'].'"></td>
                <td><img src="../'.$adct[$i]['anh3'].'"></td>
                <td><a href="index.php?ctr=capnhatct&id='.$adct[$i]['id_chitiet'].'" class="btn btn-warning">Cập nhật</a></td>
              </tr>';
							}
						}
						else{
							for($i=(($_GET['trang']*7)-7);$i<($_GET['trang']*7);$i++){
                echo '<tr>
                <td>'.($i+1).'</td>
                <td>'.$adct[$i]['tensp'].'</td>
                <td><img src="../'.$adct[$i]['anh1'].'"></td>
                <td><img src="../'.$adct[$i]['anh2'].'"></td>
                <td><img src="../'.$adct[$i]['anh3'].'"></td>
                <td><a href="index.php?ctr=capnhatct&id='.$adct[$i]['id_chitiet'].'" class="btn btn-warning">Cập nhật</a></td>
              </tr>';
							}
					
						}
					}
					else{
						if(count($adct)>7){
							$dait=7;
						}
						else{
							$dait=count($adct);
						}
						for($i=0;$i<$dait;$i++){
                echo '<tr>
                <td>'.($i+1).'</td>
                <td>'.$adct[$i]['tensp'].'</td>
                <td><img src="../'.$adct[$i]['anh1'].'"></td>
                <td><img src="../'.$adct[$i]['anh2'].'"></td>
                <td><img src="../'.$adct[$i]['anh3'].'"></td>
                <td><a href="index.php?ctr=capnhatct&id='.$adct[$i]['id_chitiet'].'" class="btn btn-warning">Cập nhật</a></td>
            </tr>';
						}
					}?>
    </tbody>
    </table>
			    <?php
					for($i=1;$i<=$du;$i++){
						if($i==1){
						echo '<ul class="pagination">';}
						if(isset($_GET['searchct'])){
							echo '<li class="page-item"><a class="page-link"  href="index.php?ctr=chitiet&trang='.$i.'&searchct='.$_GET['searchct'].'">'.$i.'</a></li>';
						}
						else{
							echo '<li class="page-item"><a class="page-link"  href="index.php?ctr=chitiet&trang='.$i.'">'.$i.'</a></li>';
						}
						
					if($i==$du){echo'</ul>';}
					}?>