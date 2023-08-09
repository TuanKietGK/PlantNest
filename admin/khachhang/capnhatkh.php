<?php  
     if(isset($_GET['id'])){
     $_SESSION['get']=$_GET['id'];}
     if(isset($_SESSION['get'])){
     $g=$_SESSION['get'];}
     $adkh=$adm->adkh();
?>
        <div class="card card-register mx-auto mt-2">
        <div class="card-header">Cập nhật khách hàng</div>
        <div class="card-body">
        <form role="form" method="post" action="index.php">
        <input type="hidden" name="ctr" value="capnhatkh">
           <?php for($i=0;$i<count($adkh);$i++){
            if($g==$adkh[$i]['id_kh']){
           echo '<div class="form-group">
                <span>Tên khách hàng</span>
                <input class="form-control" placeholder="Tên sản phẩm" name="tenkh" value="'.$adkh[$i]['tenkh'].'">
            </div>
            <div class="form-group">
                <span>Email</span>
                <input class="form-control" type="text" placeholder="Email" name="email" value="'.$adkh[$i]['email'].'">
            </div>
            <div class="form-group">
                <span>Địa chỉ</span>
                <input class="form-control" type="text" placeholder="Địa chỉ" name="diachi" value="'.$adkh[$i]['diachi'].'">
            </div>
            <div class="form-group">
                <span>Sđt</span>
                <input class="form-control" type="number" placeholder="Sđt" name="sdt" value="'.$adkh[$i]['sdt'].'">
            </div>
            <button type="submit" name="submit" class="btn btn-info">Cập nhật</button>&nbsp;<a href="index.php?xoa='.$g.'&ctr=khachhang" class="btn btn-info">Xóa</a>';} }
            ?>
        </form>  
        <?php  if(isset($w)){
                echo '<p style="color: red;">'.$w.'</p>';} ?>
     </div>
    </div>