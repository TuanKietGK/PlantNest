<?php
if(isset($_GET['xoa'])){
      $xuly->xoaad();
    }
?>
<?php 
     $adad=$adm->adad();
?>
        <h2><b>Admin</b></h2><a class="btn btn-primary" href="index.php?ctr=themad">Thêm admin</a>
        <form method="get" action="index.php"><input name="searchad" type="search"><input type="submit" value="search"></form>
        <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Stt</th>
        <th>Username</th>
        <th>Password</th>
        <th>Cập nhật</th>
      </tr>
    </thead>
    <tbody>
      		<?php
					if(count($adad)%7==0){
						$du=count($adad)/7;
					}
					else{
						$du=((count($adad)-(count($adad)%7))/7)+1;
					}
					if(isset($_GET['trang'])){
						if($_GET['trang']==$du){
							for($i=(($_GET['trang']*7)-7);$i<count($adad);$i++){
                echo '<tr>
                <td>'.($i+1).'</td>
                <td>'.$adad[$i]['username'].'</td>
                <td>'.$adad[$i]['password'].'</td>
                <td><a href="index.php?ctr=capnhatad&id='.$adad[$i]['id_ad'].'" class="btn btn-warning">Cập nhật</a></td>
              </tr>';
							}
						}
						else{
							for($i=(($_GET['trang']*7)-7);$i<($_GET['trang']*7);$i++){
                echo '<tr>
                <td>'.($i+1).'</td>
                <td>'.$adad[$i]['username'].'</td>
                <td>'.$adad[$i]['password'].'</td>
                <td><a href="index.php?ctr=capnhatad&id='.$adad[$i]['id_ad'].'" class="btn btn-warning">Cập nhật</a></td>
              </tr>';
							}
					
						}
					}
					else{
						if(count($adad)>7){
							$dait=7;
						}
						else{
							$dait=count($adad);
						}
						for($i=0;$i<$dait;$i++){
              echo '<tr>
              <td>'.($i+1).'</td>
              <td>'.$adad[$i]['username'].'</td>
              <td>'.$adad[$i]['password'].'</td>
              <td><a href="index.php?ctr=capnhatad&id='.$adad[$i]['id_ad'].'" class="btn btn-warning">Cập nhật</a></td>
            </tr>';
						}
					}?>
    </tbody>
    </table>
			    <?php
					for($i=1;$i<=$du;$i++){
						if($i==1){
						echo '<ul class="pagination">';}
						if(isset($_GET['searchad'])){
							echo '<li class="page-item"><a class="page-link"  href="index.php?ctr=admin&trang='.$i.'&searchad='.$_GET['searchad'].'">'.$i.'</a></li>';
						}
						else{
							echo '<li class="page-item"><a class="page-link"  href="index.php?ctr=admin&trang='.$i.'">'.$i.'</a></li>';
						}
						
					if($i==$du){echo'</ul>';}
					}?>