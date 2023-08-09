<?php
if(isset($_GET['xoa'])){
      $xuly->xoabn();
    }
?>
<?php 
     $adbn=$adm->adbn();
?>
        <h2><b>Banner</b></h2><a class="btn btn-primary" href="index.php?ctr=thembn">Thêm banner</a>
        <table  class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Stt</th>
        <th>Banner</th>
        <th>Cập nhật</th>
      </tr>
    </thead>
    <tbody>
      		<?php
					if(count($adbn)%7==0){
						$du=count($adbn)/7;
					}
					else{
						$du=((count($adbn)-(count($adbn)%7))/7)+1;
					}
					if(isset($_GET['trang'])){
						if($_GET['trang']==$du){
							for($i=(($_GET['trang']*7)-7);$i<count($adbn);$i++){
                echo '<tr>
                <td>'.($i+1).'</td>
                <td><img src="../'.$adbn[$i]['banner'].'"></td>
                <td><a href="index.php?ctr=capnhatbn&id='.$adbn[$i]['id_banner'].'" class="btn btn-warning">Cập nhật</a></td>
              </tr>';
							}
						}
						else{
							for($i=(($_GET['trang']*7)-7);$i<($_GET['trang']*7);$i++){
                echo '<tr>
                <td>'.($i+1).'</td>
                <td><img src="../'.$adbn[$i]['banner'].'"></td>
                <td><a href="index.php?ctr=capnhatbn&id='.$adbn[$i]['id_banner'].'" class="btn btn-warning">Cập nhật</a></td>
              </tr>';
							}
					
						}
					}
					else{
						if(count($adbn)>7){
							$dait=7;
						}
						else{
							$dait=count($adbn);
						}
						for($i=0;$i<$dait;$i++){
              echo '<tr>
              <td>'.($i+1).'</td>
              <td><img src="../'.$adbn[$i]['banner'].'"></td>
              <td><a href="index.php?ctr=capnhatbn&id='.$adbn[$i]['id_banner'].'" class="btn btn-warning">Cập nhật</a></td>
            </tr>';
						}
					}?>
    </tbody>
    </table>
			    <?php
					for($i=1;$i<=$du;$i++){
						if($i==1){
						echo '<ul class="pagination">';}
					echo '<li class="page-item"><a class="page-link"  href="index.php?ctr=banner&trang='.$i.'">'.$i.'</a></li>';
						if($i==$du){echo'</ul>';}}?>