<?php
if(isset($_GET['xoa'])){
      $xuly->xoatr();
    }
?>
<?php 
     $adtr=$adm->adtr();
?>
        <h2><b>Tình trạng</b></h2><a class="btn btn-primary" href="index.php?ctr=themtr">Thêm tình trạng</a>
        <table  class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Stt</th>
        <th>Tên tình trạng</th>
        <th>Cập nhật</th>
      </tr>
    </thead>
    <tbody>
      		<?php
					if(count($adtr)%7==0){
						$du=count($adtr)/7;
					}
					else{
						$du=((count($adtr)-(count($adtr)%7))/7)+1;
					}
					if(isset($_GET['trang'])){
						if($_GET['trang']==$du){
							for($i=(($_GET['trang']*7)-7);$i<count($adtr);$i++){
                echo '<tr>
                <td>'.($i+1).'</td>
                <td>'.$adtr[$i]['tinhtrang'].'</td>
                <td><a href="index.php?ctr=capnhattr&id='.$adtr[$i]['id_tinhtrang'].'" class="btn btn-warning">Cập nhật</a></td>
              </tr>';
							}
						}
						else{
							for($i=(($_GET['trang']*7)-7);$i<($_GET['trang']*7);$i++){
                echo '<tr>
                <td>'.($i+1).'</td>
                <td>'.$adtr[$i]['tinhtrang'].'</td>
                <td><a href="index.php?ctr=capnhattr&id='.$adtr[$i]['id_tinhtrang'].'" class="btn btn-warning">Cập nhật</a></td>
              </tr>';
							}
					
						}
					}
					else{
						if(count($adtr)>7){
							$dait=7;
						}
						else{
							$dait=count($adtr);
						}
						for($i=0;$i<$dait;$i++){
              echo '<tr>
              <td>'.($i+1).'</td>
              <td>'.$adtr[$i]['tinhtrang'].'</td>
              <td><a href="index.php?ctr=capnhattr&id='.$adtr[$i]['id_tinhtrang'].'" class="btn btn-warning">Cập nhật</a></td>
            </tr>';
						}
					}?>
    </tbody>
    </table>
			    <?php
					for($i=1;$i<=$du;$i++){
						if($i==1){
						echo '<ul class="pagination">';}
					echo '<li class="page-item"><a class="page-link"  href="index.php?ctr=tinhtrang&trang='.$i.'">'.$i.'</a></li>';
						if($i==$du){echo'</ul>';}}?>