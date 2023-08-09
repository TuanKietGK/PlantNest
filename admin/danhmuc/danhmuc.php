<?php
if(isset($_GET['xoa'])){
      $xuly->xoadm();
    }
?>
<?php 
     $addm=$adm->addm();
?>
        <h2><b>Danh mục</b></h2><a class="btn btn-primary" href="index.php?ctr=themdm">Thêm danh mục</a>
        <table  class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Stt</th>
        <th>Tên danh mục</th>
        <th>Cập nhật</th>
      </tr>
    </thead>
    <tbody>
      		<?php
					if(count($addm)%7==0){
						$du=count($addm)/7;
					}
					else{
						$du=((count($addm)-(count($addm)%7))/7)+1;
					}
					if(isset($_GET['trang'])){
						if($_GET['trang']==$du){
							for($i=(($_GET['trang']*7)-7);$i<count($addm);$i++){
                echo '<tr>
                <td>'.($i+1).'</td>
                <td>'.$addm[$i]['danhmuc'].'</td>
                <td><a href="index.php?ctr=capnhatdm&id='.$addm[$i]['id_danhmuc'].'" class="btn btn-warning">Cập nhật</a></td>
              </tr>';
							}
						}
						else{
							for($i=(($_GET['trang']*7)-7);$i<($_GET['trang']*7);$i++){
                echo '<tr>
                <td>'.($i+1).'</td>
                <td>'.$addm[$i]['danhmuc'].'</td>
                <td><a href="index.php?ctr=capnhatdm&id='.$addm[$i]['id_danhmuc'].'" class="btn btn-warning">Cập nhật</a></td>
              </tr>';
							}
					
						}
					}
					else{
						if(count($addm)>7){
							$dait=7;
						}
						else{
							$dait=count($addm);
						}
						for($i=0;$i<$dait;$i++){
              echo '<tr>
              <td>'.($i+1).'</td>
              <td>'.$addm[$i]['danhmuc'].'</td>
              <td><a href="index.php?ctr=capnhatdm&id='.$addm[$i]['id_danhmuc'].'" class="btn btn-warning">Cập nhật</a></td>
            </tr>';
						}
					}?>
    </tbody>
    </table>
			    <?php
					for($i=1;$i<=$du;$i++){
						if($i==1){
						echo '<ul class="pagination">';}
						if(isset($_GET['searchdm'])){
							echo '<li class="page-item"><a class="page-link"  href="index.php?ctr=danhmuc&trang='.$i.'&searchdm='.$_GET['searchdm'].'">'.$i.'</a></li>';
						}
						else{
							echo '<li class="page-item"><a class="page-link"  href="index.php?ctr=danhmuc&trang='.$i.'">'.$i.'</a></li>';
						}
						
					if($i==$du){echo'</ul>';}
					}?>