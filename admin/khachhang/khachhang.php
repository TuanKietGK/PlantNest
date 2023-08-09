<?php
if(isset($_GET['xoa'])){
      $xuly->xoakh();
    }
?>
<?php 
     $adkh=$adm->adkh();
?>
        <h2><b>Khách hàng</b></h2><a class="btn btn-primary" href="index.php?ctr=themkh">Thêm khách hàng</a>
        <form method="get" action="index.php"><input name="searchkh" type="search"><input type="submit" value="search"></form>
        <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Stt</th>
        <th>Tên khách hàng</th>
        <th>Email</th>
        <th>Sđt</th>
        <th>Địa chỉ</th>
        <th>Cập nhật</th>
      </tr>
    </thead>
    <tbody>
      		<?php
					if(count($adkh)%7==0){
						$du=count($adkh)/7;
					}
					else{
						$du=((count($adkh)-(count($adkh)%7))/7)+1;
					}
					if(isset($_GET['trang'])){
						if($_GET['trang']==$du){
							for($i=(($_GET['trang']*7)-7);$i<count($adkh);$i++){
                echo '<tr>
                <td>'.($i+1).'</td>
                <td>'.$adkh[$i]['tenkh'].'</td>
                <td>'.$adkh[$i]['email'].'</td>
                <td>'.$adkh[$i]['sdt'].'</td>
                <td>'.$adkh[$i]['diachi'].'</td>
                <td><a href="index.php?ctr=capnhatkh&id='.$adkh[$i]['id_kh'].'" class="btn btn-warning">Cập nhật</a></td>
              </tr>';
							}
						}
						else{
							for($i=(($_GET['trang']*7)-7);$i<($_GET['trang']*7);$i++){
                echo '<tr>
                <td>'.($i+1).'</td>
                <td>'.$adkh[$i]['tenkh'].'</td>
                <td>'.$adkh[$i]['email'].'</td>
                <td>'.$adkh[$i]['sdt'].'</td>
                <td>'.$adkh[$i]['diachi'].'</td>
                <td><a href="index.php?ctr=capnhatkh&id='.$adkh[$i]['id_kh'].'" class="btn btn-warning">Cập nhật</a></td>
              </tr>';
							}
					
						}
					}
					else{
						if(count($adkh)>7){
							$dait=7;
						}
						else{
							$dait=count($adkh);
						}
						for($i=0;$i<$dait;$i++){
              echo '<tr>
              <td>'.($i+1).'</td>
              <td>'.$adkh[$i]['tenkh'].'</td>
              <td>'.$adkh[$i]['email'].'</td>
              <td>'.$adkh[$i]['sdt'].'</td>
              <td>'.$adkh[$i]['diachi'].'</td>
              <td><a href="index.php?ctr=capnhatkh&id='.$adkh[$i]['id_kh'].'" class="btn btn-warning">Cập nhật</a></td>
            </tr>';
						}
					}?>
    </tbody>
    </table>
			    <?php
					for($i=1;$i<=$du;$i++){
						if($i==1){
						echo '<ul class="pagination">';}
						if(isset($_GET['searchkh'])){
							echo '<li class="page-item"><a class="page-link"  href="index.php?ctr=khachhang&trang='.$i.'&searchkh='.$_GET['searchkh'].'">'.$i.'</a></li>';
						}
						else{
							echo '<li class="page-item"><a class="page-link"  href="index.php?ctr=khachhang&trang='.$i.'">'.$i.'</a></li>';
						}
						
					if($i==$du){echo'</ul>';}
					}?>