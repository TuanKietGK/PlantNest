<?php  
     $adtr=$adm->adtr();
?>
<div class="card card-register mx-auto mt-2">
        <div class="card-header">Thêm đơn hàng</div>
        <div class="card-body">
        <form role="form" method="post" action="index.php">
        <input type="hidden" name="ctr" value="themdh">
           <div class="form-group">
                <span>ID khách hàng</span>
                <input class="form-control" type="text"  placeholder="ID khách hàng" name="idkh" value="">
            </div>
            <div class="form-group">
                <span>Ngày đặt</span>
                <input class="form-control" type="datetime-local" placeholder="Ngày đặt" name="ngaydat" value="">
            </div>
            <div class="form-group">
                <span>Tổng tiền</span>
                <input class="form-control" type="number" placeholder="Tổng tiền" name="tongtien" value="">
            </div>
            <div class="form-group">
            <span>Tình trạng</span>
            <select class="form-control" name="tinhtrang">
            <?php for($j=0;$j<count($adtr);$j++){
                echo  '<option value="'.$adtr[$j]['tinhtrang'].'">'.$adtr[$j]['tinhtrang'].'</option>';
            }?>
            </select>
            </div>
            <button type="submit" name="submit" class="btn btn-info">Thêm</button>
        </form>  
        <?php  if(isset($w)){
                echo '<p style="color: red;">'.$w.'</p>';} ?>
    </div>
    </div>