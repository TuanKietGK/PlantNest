<?php
if(isset($_GET['xoa'])){
      $xuly->xoadh();
    }
?>
<?php 
     $addh=$adm->addh();
?>
        <h2><b>Đơn hàng</b></h2><a class="btn btn-primary" href="index.php?ctr=themdh">Thêm đơn hàng</a>
        <form method="get" action="index.php"><input name="searchdh" type="search"><input type="submit" value="search"></form>
        <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Stt</th>
        <th>ID khách hàng</th>
		<th>Ngày đặt</th>
        <th>Tổng tiền</th>
		<th>Tình trạng</th>
        <th>Cập nhật</th>
      </tr>
    </thead>
    <tbody>
      		<?php
					if(count($addh)%10==0){
						$du=count($addh)/10;
					}
					else{
						$du=((count($addh)-(count($addh)%10))/10)+1;
					}
					if(isset($_GET['trang'])){
						if($_GET['trang']==$du){
							for($i=(($_GET['trang']*10)-10);$i<count($addh);$i++){
                echo '<tr>
                <td>'.($i+1).'</td>
                <td>'.$addh[$i]['id_kh'].'</td>
				<td>'.$addh[$i]['ngaydat'].'</td>
                <td>'.$addh[$i]['tongtien'].'</td>
				<td>'.$addh[$i]['tinhtrang'].'</td>
                <td><a href="index.php?ctr=capnhatdh&id='.$addh[$i]['id_donhang'].'" class="btn btn-warning">Cập nhật</a></td>
              </tr>';
							}
						}
						else{
							for($i=(($_GET['trang']*10)-10);$i<($_GET['trang']*10);$i++){
                echo '<tr>
                <td>'.($i+1).'</td>
                <td>'.$addh[$i]['id_kh'].'</td>
                <td>'.$addh[$i]['ngaydat'].'</td>
                <td>'.$addh[$i]['tongtien'].'</td>
				<td>'.$addh[$i]['tinhtrang'].'</td>
                <td><a href="index.php?ctr=capnhatdh&id='.$addh[$i]['id_donhang'].'" class="btn btn-warning">Cập nhật</a></td>
              </tr>';
							}
					
						}
					}
					else{
						if(count($addh)>10){
							$dait=10;
						}
						else{
							$dait=count($addh);
						}
						for($i=0;$i<$dait;$i++){
              echo '<tr>
              <td>'.($i+1).'</td>
              <td>'.$addh[$i]['id_kh'].'</td>
              <td>'.$addh[$i]['ngaydat'].'</td>
              <td>'.$addh[$i]['tongtien'].'</td>
			  <td>'.$addh[$i]['tinhtrang'].'</td>
              <td><a href="index.php?ctr=capnhatdh&id='.$addh[$i]['id_donhang'].'" class="btn btn-warning">Cập nhật</a></td>
            </tr>';
						}
					}?>
    </tbody>
    </table>
			    <?php
					for($i=1;$i<=$du;$i++){
						if($i==1){
						echo '<ul class="pagination">';}
						if(isset($_GET['searchdh'])){
							echo '<li class="page-item"><a class="page-link"  href="index.php?ctr=donhang&trang='.$i.'&searchdh='.$_GET['searchdh'].'">'.$i.'</a></li>';
						}
						else{
							echo '<li class="page-item"><a class="page-link"  href="index.php?ctr=donhang&trang='.$i.'">'.$i.'</a></li>';
						}
						
					if($i==$du){echo'</ul>';}
					}?>