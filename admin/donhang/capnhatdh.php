<?php  
     if(isset($_GET['id'])){
     $_SESSION['get']=$_GET['id'];}
     if(isset($_SESSION['get'])){
     $g=$_SESSION['get'];}
     $addh=$adm->addh();
     $adtr=$adm->adtr();
?>
        <div class="card card-register mx-auto mt-2">
        <div class="card-header">Cập nhật đơn hàng</div>
        <div class="card-body">
        <form role="form" method="post" action="index.php">
        <input type="hidden" name="ctr" value="capnhatdh">
           <?php for($i=0;$i<count($addh);$i++){
            if($g==$addh[$i]['id_donhang']){
           echo '<div class="form-group">
                <span>ID khách hàng</span>
                <input class="form-control" type="text" placeholder="ID khách hàng" name="idkh" value="'.$addh[$i]['id_kh'].'">
            </div>
            <div class="form-group">
                <span>Ngày đặt</span>
                <input class="form-control" type="datetime-local" placeholder="Ngày đặt" name="ngaydat" value="'.date('Y-m-d\TH:i',strtotime($addh[$i]['ngaydat'])).'">
            </div>
            <div class="form-group">
                <span>Tổng tiền</span>
                <input class="form-control" type="number" placeholder="Tổng tiền" name="tongtien" value="'.$addh[$i]['tongtien'].'">
            </div>
            <div class="form-group">
            <span>Tình trạng</span>
            <select class="form-control" name="tinhtrang">
            <option value="'.$addh[$i]['tinhtrang'].'">'.$addh[$i]['tinhtrang'].'</option>';
            for($j=0;$j<count($adtr);$j++){
                if($adtr[$j]['id_tinhtrang']!=$addh[$i]['id_tinhtrang']){
                echo  '<option value="'.$adtr[$j]['tinhtrang'].'">'.$adtr[$j]['tinhtrang'].'</option>';}
            }
        echo '</select>
        </div>
            <button type="submit" name="submit" class="btn btn-info">Cập nhật</button>&nbsp;<a href="index.php?xoa='.$g.'&ctr=donhang" class="btn btn-info">Xóa</a>';} }
            ?>
        </form>  
        <?php  if(isset($w)){
                echo '<p style="color: red;">'.$w.'</p>';} ?>
     </div>
    </div>