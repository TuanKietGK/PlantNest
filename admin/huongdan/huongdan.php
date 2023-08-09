<?php
if(isset($_GET['xoa'])){
      $xuly->xoahd();
    }
?>
<?php 
     $adhd=$adm->adhd();
?>
        <h2><b>Hướng dẫn</b></h2><a class="btn btn-primary" href="index.php?ctr=themhd">Thêm hướng dẫn</a>
        <form method="get" action="index.php"><input name="searchhd" type="search"><input type="submit" value="search"></form>
        <table  class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Stt</th>
		<th>Tên danh mục</th>
        <th>Hướng dẫn 1</th>
        <th>Hướng dẫn 2</th>
        <th>Cập nhật</th>
      </tr>
    </thead>
    <tbody>
      		<?php
					if(count($adhd)%7==0){
						$du=count($adhd)/7;
					}
					else{
						$du=((count($adhd)-(count($adhd)%7))/7)+1;
					}
					if(isset($_GET['trang'])){
						if($_GET['trang']==$du){
							for($i=(($_GET['trang']*7)-7);$i<count($adhd);$i++){
                echo '<tr>
                <td>'.($i+1).'</td>
                <td>'.$adhd[$i]['danhmuc'].'</td>
                <td><img src="../'.$adhd[$i]['anh1'].'"></td>
                <td><img src="../'.$adhd[$i]['anh2'].'"></td>
                <td><a href="index.php?ctr=capnhathd&id='.$adhd[$i]['id_huongdan'].'" class="btn btn-warning">Cập nhật</a></td>
              </tr>';
							}
						}
						else{
							for($i=(($_GET['trang']*7)-7);$i<($_GET['trang']*7);$i++){
                echo '<tr>
                <td>'.($i+1).'</td>
                <td>'.$adhd[$i]['danhmuc'].'</td>
                <td><img src="../'.$adhd[$i]['anh1'].'"></td>
                <td><img src="../'.$adhd[$i]['anh2'].'"></td>
                <td><a href="index.php?ctr=capnhathd&id='.$adhd[$i]['id_huongdan'].'" class="btn btn-warning">Cập nhật</a></td>
              </tr>';
							}
					
						}
					}
					else{
						if(count($adhd)>7){
							$dait=7;
						}
						else{
							$dait=count($adhd);
						}
						for($i=0;$i<$dait;$i++){
                echo '<tr>
                <td>'.($i+1).'</td>
                <td>'.$adhd[$i]['danhmuc'].'</td>
                <td><img src="../'.$adhd[$i]['anh1'].'"></td>
                <td><img src="../'.$adhd[$i]['anh2'].'"></td>
                <td><a href="index.php?ctr=capnhathd&id='.$adhd[$i]['id_huongdan'].'" class="btn btn-warning">Cập nhật</a></td>
            </tr>';
						}
					}?>
    </tbody>
    </table>
			    <?php
					for($i=1;$i<=$du;$i++){
						if($i==1){
						echo '<ul class="pagination">';}
						if(isset($_GET['searchhd'])){
							echo '<li class="page-item"><a class="page-link"  href="index.php?ctr=huongdan&trang='.$i.'&searchhd='.$_GET['searchhd'].'">'.$i.'</a></li>';
						}
						else{
							echo '<li class="page-item"><a class="page-link"  href="index.php?ctr=huongdan&trang='.$i.'">'.$i.'</a></li>';
						}
						
					if($i==$du){echo'</ul>';}
					}?>