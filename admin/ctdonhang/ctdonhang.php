<?php 
     $adctdh=$adm->adctdh();
?>
        <h2><b>Chi tiết đơn hànng</b></h2>
        <form method="get" action="index.php"><input name="searchctdh" type="search"><input type="submit" value="search"></form>
        <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Stt</th>
        <th>ID đơn hàng</th>
        <th>ID số lượng</th>
        <th>Tên sản phẩm</th>
        <th>Màu sắc</th>
        <th>Kích cỡ</th>
        <th>Số lượng</th>
        <th>Tổng giá</th>
      </tr>
    </thead>
    <tbody>
      		<?php
					if(count($adctdh)%12==0){
						$du=count($adctdh)/12;
					}
					else{
						$du=((count($adctdh)-(count($adctdh)%12))/12)+1;
					}
					if(isset($_GET['trang'])){
						if($_GET['trang']==$du){
							for($i=(($_GET['trang']*12)-12);$i<count($adctdh);$i++){
                echo '<tr>
                <td>'.($i+1).'</td>
                <td>'.$adctdh[$i]['id_donhang'].'</td>
                <td>'.$adctdh[$i]['id_sl'].'</td>
                <td>'.$adctdh[$i]['tensp'].'</td>
                <td>'.$adctdh[$i]['mausac'].'</td>
                <td>'.$adctdh[$i]['kichco'].'</td>
                <td>'.$adctdh[$i]['soluong'].'</td>
                <td>'.$adctdh[$i]['tonggia'].'</td>
              </tr>';
							}
						}
						else{
							for($i=(($_GET['trang']*12)-12);$i<($_GET['trang']*12);$i++){
                 echo '<tr>
                 <td>'.($i+1).'</td>
                 <td>'.$adctdh[$i]['id_donhang'].'</td>
                 <td>'.$adctdh[$i]['id_sl'].'</td>
                 <td>'.$adctdh[$i]['tensp'].'</td>
                 <td>'.$adctdh[$i]['mausac'].'</td>
                 <td>'.$adctdh[$i]['kichco'].'</td>
                 <td>'.$adctdh[$i]['soluong'].'</td>
                 <td>'.$adctdh[$i]['tonggia'].'</td>
                 </tr>';}
					
						}
					}
					else{
						if(count($adctdh)>12){
							$dait=12;
						}
						else{
							$dait=count($adctdh);
						}
						for($i=0;$i<$dait;$i++){
                echo '<tr>
                <td>'.($i+1).'</td>
                <td>'.$adctdh[$i]['id_donhang'].'</td>
                <td>'.$adctdh[$i]['id_sl'].'</td>
                <td>'.$adctdh[$i]['tensp'].'</td>
                <td>'.$adctdh[$i]['mausac'].'</td>
                <td>'.$adctdh[$i]['kichco'].'</td>
                <td>'.$adctdh[$i]['soluong'].'</td>
                <td>'.$adctdh[$i]['tonggia'].'</td>
                    </tr>';}}?>
    </tbody>
    </table>
			    <?php
					for($i=1;$i<=$du;$i++){
						if($i==1){
						echo '<ul class="pagination">';}
						if(isset($_GET['searchctdh'])){
							echo '<li class="page-item"><a class="page-link"  href="index.php?ctr=ctdonhang&trang='.$i.'&searchctdh='.$_GET['searchctdh'].'">'.$i.'</a></li>';
						}
						else{
							echo '<li class="page-item"><a class="page-link"  href="index.php?ctr=ctdonhang&trang='.$i.'">'.$i.'</a></li>';
						}
						
					if($i==$du){echo'</ul>';}
					}?>