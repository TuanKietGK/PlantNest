<?php
if(isset($_GET['xoa'])){
      $xuly->xoakc();
}
?>
<?php 
     $adkc=$adm->adkc();
?>
        <h2><b>Kích cỡ</b></h2><a class="btn btn-primary" href="index.php?ctr=themkc">Thêm kích cỡ</a>
        <form method="get" action="index.php"><input name="searchkc" type="search"><input type="submit" value="search"></form>
        <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Stt</th>
        <th>Tên kích cỡ</th>
        <th>Danh mục</th>
        <th>Cập nhật</th>
      </tr>
    </thead>
    <tbody>
      		<?php
					if(count($adkc)%7==0){
						$du=count($adkc)/7;
					}
					else{
						$du=((count($adkc)-(count($adkc)%7))/7)+1;
					}
					if(isset($_GET['trang'])){
						if($_GET['trang']==$du){
							for($i=(($_GET['trang']*7)-7);$i<count($adkc);$i++){
                echo '<tr>
                <td>'.($i+1).'</td>
                <td>'.$adkc[$i]['kichco'].'</td>
                <td>'.$adkc[$i]['danhmuc'].'</td>
                <td><a href="index.php?ctr=capnhatkc&id='.$adkc[$i]['id_kichco'].'" class="btn btn-warning">Cập nhật</a></td>
              </tr>';
							}
						}
						else{
							for($i=(($_GET['trang']*7)-7);$i<($_GET['trang']*7);$i++){
                echo '<tr>
                <td>'.($i+1).'</td>
                <td>'.$adkc[$i]['kichco'].'</td>
                <td>'.$adkc[$i]['danhmuc'].'</td>
                <td><a href="index.php?ctr=capnhatkc&id='.$adkc[$i]['id_kichco'].'" class="btn btn-warning">Cập nhật</a></td>
              </tr>';
							}
					
						}
					}
					else{
						if(count($adkc)>7){
							$dait=7;
						}
						else{
							$dait=count($adkc);
						}
						for($i=0;$i<$dait;$i++){
                echo '<tr>
                <td>'.($i+1).'</td>
                <td>'.$adkc[$i]['kichco'].'</td>
                <td>'.$adkc[$i]['danhmuc'].'</td>
                <td><a href="index.php?ctr=capnhatkc&id='.$adkc[$i]['id_kichco'].'" class="btn btn-warning">Cập nhật</a></td>
            </tr>';
						}
					}?>
    </tbody>
    </table>
			    <?php
					for($i=1;$i<=$du;$i++){
						if($i==1){
						echo '<ul class="pagination">';}
						if(isset($_GET['searchkc'])){
							echo '<li class="page-item"><a class="page-link"  href="index.php?ctr=kichco&trang='.$i.'&searchkc='.$_GET['searchkc'].'">'.$i.'</a></li>';
						}
						else{
							echo '<li class="page-item"><a class="page-link"  href="index.php?ctr=kichco&trang='.$i.'">'.$i.'</a></li>';
						}
						
					if($i==$du){echo'</ul>';}
					}?>