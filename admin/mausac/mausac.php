<?php
if(isset($_GET['xoa'])){
      $xuly->xoams();
    }
?>
<?php 
     $adms=$adm->adms();
?>
        <h2><b>Màu sắc</b></h2><a class="btn btn-primary" href="index.php?ctr=themms">Thêm màu sắc</a>
        <form method="get" action="index.php"><input name="searchms" type="search"><input type="submit" value="search"></form>
        <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Stt</th>
		<th>Tên sản phẩm</th>
        <th>Tên màu sắc</th>
        <th>Ảnh mô tả</th>
        <th>Cập nhật</th>
      </tr>
    </thead>
    <tbody>
      		<?php
					if(count($adms)%7==0){
						$du=count($adms)/7;
					}
					else{
						$du=((count($adms)-(count($adms)%7))/7)+1;
					}
					if(isset($_GET['trang'])){
						if($_GET['trang']==$du){
							for($i=(($_GET['trang']*7)-7);$i<count($adms);$i++){
                echo '<tr>
                <td>'.($i+1).'</td>
                <td>'.$adms[$i]['tensp'].'</td>
                <td>'.$adms[$i]['mausac'].'</td>
                <td><img src="../'.$adms[$i]['anh'].'"></td>
                <td><a href="index.php?ctr=capnhatms&id='.$adms[$i]['id_mausac'].'" class="btn btn-warning">Cập nhật</a></td>
              </tr>';
							}
						}
						else{
							for($i=(($_GET['trang']*7)-7);$i<($_GET['trang']*7);$i++){
                echo '<tr>
                <td>'.($i+1).'</td>
                <td>'.$adms[$i]['tensp'].'</td>
                <td>'.$adms[$i]['mausac'].'</td>
                <td><img src="../'.$adms[$i]['anh'].'"></td>
                <td><a href="index.php?ctr=capnhatms&id='.$adms[$i]['id_mausac'].'" class="btn btn-warning">Cập nhật</a></td>
              </tr>';
							}
					
						}
					}
					else{
						if(count($adms)>7){
							$dait=7;
						}
						else{
							$dait=count($adms);
						}
						for($i=0;$i<$dait;$i++){
                echo '<tr>
                <td>'.($i+1).'</td>
                <td>'.$adms[$i]['tensp'].'</td>
                <td>'.$adms[$i]['mausac'].'</td>
                <td><img src="../'.$adms[$i]['anh'].'"></td>
                <td><a href="index.php?ctr=capnhatms&id='.$adms[$i]['id_mausac'].'" class="btn btn-warning">Cập nhật</a></td>
            </tr>';
						}
					}?>
    </tbody>
    </table>
			    <?php
					for($i=1;$i<=$du;$i++){
						if($i==1){
						echo '<ul class="pagination">';}
						if(isset($_GET['searchms'])){
							echo '<li class="page-item"><a class="page-link"  href="index.php?ctr=mausac&trang='.$i.'&searchms='.$_GET['searchms'].'">'.$i.'</a></li>';
						}
						else{
							echo '<li class="page-item"><a class="page-link"  href="index.php?ctr=mausac&trang='.$i.'">'.$i.'</a></li>';
						}
						
					if($i==$du){echo'</ul>';}
					}?>