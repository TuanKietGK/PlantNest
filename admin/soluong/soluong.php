<?php
if(isset($_GET['xoa'])){
      $xuly->xoasl();}
?>
<?php 
     $adsl=$adm->adsl();
?>
        <h2><b>Số lượng</b></h2><a class="btn btn-primary" href="index.php?ctr=themsl">Thêm số lượng</a>
        <form method="get" action="index.php"><input name="searchsl" type="search"><input type="submit" value="search"></form>
        <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Stt</th>
        <th>Tên sản phẩm</th>
        <th>Màu sắc</th>
        <th>Kích cỡ</th>
        <th>Số lượng</th>
        <th>Cập nhật</th>
      </tr>
    </thead>
    <tbody>
      		<?php
					if(count($adsl)%12==0){
						$du=count($adsl)/12;
					}
					else{
						$du=((count($adsl)-(count($adsl)%12))/12)+1;
					}
					if(isset($_GET['trang'])){
						if($_GET['trang']==$du){
							for($i=(($_GET['trang']*12)-12);$i<count($adsl);$i++){
                echo '<tr>
                <td>'.($i+1).'</td>
                <td>'.$adsl[$i]['tensp'].'</td>
                <td>'.$adsl[$i]['mausac'].'</td>
                <td>'.$adsl[$i]['kichco'].'</td>
                <td>'.$adsl[$i]['soluong'].'</td>
                <td><a href="index.php?ctr=capnhatsl&id='.$adsl[$i]['id_sl'].'" class="btn btn-warning">Cập nhật</a></td>
              </tr>';
							}
						}
						else{
							for($i=(($_GET['trang']*12)-12);$i<($_GET['trang']*12);$i++){
                 echo '<tr>
                 <td>'.($i+1).'</td>
                 <td>'.$adsl[$i]['tensp'].'</td>
                 <td>'.$adsl[$i]['mausac'].'</td>
                 <td>'.$adsl[$i]['kichco'].'</td>
                 <td>'.$adsl[$i]['soluong'].'</td>
                 <td><a href="index.php?ctr=capnhatsl&id='.$adsl[$i]['id_sl'].'" class="btn btn-warning">Cập nhật</a></td>
                 </tr>';}
					
						}
					}
					else{
						if(count($adsl)>12){
							$dait=12;
						}
						else{
							$dait=count($adsl);
						}
						for($i=0;$i<$dait;$i++){
                    echo '<tr>
                    <td>'.($i+1).'</td>
                    <td>'.$adsl[$i]['tensp'].'</td>
                    <td>'.$adsl[$i]['mausac'].'</td>
                    <td>'.$adsl[$i]['kichco'].'</td>
                    <td>'.$adsl[$i]['soluong'].'</td>
                    <td><a href="index.php?ctr=capnhatsl&id='.$adsl[$i]['id_sl'].'" class="btn btn-warning">Cập nhật</a></td>
                    </tr>';}}?>
    </tbody>
    </table>
			    <?php
					for($i=1;$i<=$du;$i++){
						if($i==1){
						echo '<ul class="pagination">';}
						if(isset($_GET['searchsl'])){
							echo '<li class="page-item"><a class="page-link"  href="index.php?ctr=soluong&trang='.$i.'&searchsl='.$_GET['searchsl'].'">'.$i.'</a></li>';
						}
						else{
							echo '<li class="page-item"><a class="page-link"  href="index.php?ctr=soluong&trang='.$i.'">'.$i.'</a></li>';
						}
						
					if($i==$du){echo'</ul>';}
					}?>