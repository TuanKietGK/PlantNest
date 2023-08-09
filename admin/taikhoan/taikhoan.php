<?php
if(isset($_GET['xoa'])){
      $xuly->xoatk();
}
?>
<?php 
     $adtk=$adm->adtk();
?>
        <h2><b>Tài khoản</b></h2><a class="btn btn-primary" href="index.php?ctr=themtk">Thêm tài khoản</a>
        <form method="get" action="index.php"><input name="searchtk" type="search"><input type="submit" value="search"></form>
        <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Stt</th>
        <th>Username</th>
        <th>Password</th>
        <th>Email</th>
        <th>Cập nhật</th>
      </tr>
    </thead>
    <tbody>
      		<?php
					if(count($adtk)%7==0){
						$du=count($adtk)/7;
					}
					else{
						$du=((count($adtk)-(count($adtk)%7))/7)+1;
					}
					if(isset($_GET['trang'])){
						if($_GET['trang']==$du){
							for($i=(($_GET['trang']*7)-7);$i<count($adtk);$i++){
                echo '<tr>
                <td>'.($i+1).'</td>
                <td>'.$adtk[$i]['username'].'</td>
                <td>'.$adtk[$i]['pass'].'</td>
                <td>'.$adtk[$i]['email'].'</td>
                <td><a href="index.php?ctr=capnhattk&id='.$adtk[$i]['id_user'].'" class="btn btn-warning">Cập nhật</a></td>
              </tr>';
							}
						}
						else{
							for($i=(($_GET['trang']*7)-7);$i<($_GET['trang']*7);$i++){
                echo '<tr>
                <td>'.($i+1).'</td>
                <td>'.$adtk[$i]['username'].'</td>
                <td>'.$adtk[$i]['pass'].'</td>
                <td>'.$adtk[$i]['email'].'</td>
                <td><a href="index.php?ctr=capnhattk&id='.$adtk[$i]['id_user'].'" class="btn btn-warning">Cập nhật</a></td>
              </tr>';
							}
					
						}
					}
					else{
						if(count($adtk)>7){
							$dait=7;
						}
						else{
							$dait=count($adtk);
						}
						for($i=0;$i<$dait;$i++){
              echo '<tr>
              <td>'.($i+1).'</td>
              <td>'.$adtk[$i]['username'].'</td>
              <td>'.$adtk[$i]['pass'].'</td>
              <td>'.$adtk[$i]['email'].'</td>
              <td><a href="index.php?ctr=capnhattk&id='.$adtk[$i]['id_user'].'" class="btn btn-warning">Cập nhật</a></td>
            </tr>';
						}
					}?>
    </tbody>
    </table>
			    <?php
					for($i=1;$i<=$du;$i++){
						if($i==1){
						echo '<ul class="pagination">';}
						if(isset($_GET['searchtk'])){
							echo '<li class="page-item"><a class="page-link"  href="index.php?ctr=taikhoan&trang='.$i.'&searchtk='.$_GET['searchtk'].'">'.$i.'</a></li>';
						}
						else{
							echo '<li class="page-item"><a class="page-link"  href="index.php?ctr=taikhoan&trang='.$i.'">'.$i.'</a></li>';
						}
						
					if($i==$du){echo'</ul>';}
					}?>