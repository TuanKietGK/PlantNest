<?php  
     if(isset($_GET['id'])){
     $_SESSION['get']=$_GET['id'];}
     if(isset($_SESSION['get'])){
     $g=$_SESSION['get'];}
     $adms=$adm->adms();
     $adsp=$adm->adsp();
     $adkc=$adm->adkc();
     $adsl=$adm->adsl();
?>
        <div  class="card card-register mx-auto mt-2">
        <div class="card-header">Cập nhật số lượng</div>
        <div class="card-body">
        <form role="form" method="post" action="index.php">
        <input type="hidden" name="ctr" value="capnhatsl">
           <?php for($i=0;$i<count($adsl);$i++){
            if($g==$adsl[$i]['id_sl']){
           echo '<div class="form-group">
                <span>Sản phẩm</span>
                <input  class="form-control" value="'.$adsl[$i]['tensp'].'" disabled>
            </div>
            <div class="form-group">
            <span>Màu sắc</span>
            <input  class="form-control" value="'.$adsl[$i]['mausac'].'" disabled>
            </div>
            <div class="form-group">
            <span>Kích cỡ</span>
            <input  class="form-control" value="'.$adsl[$i]['kichco'].'" disabled>
            </div>
            <div class="form-group">
                <span>Số lượng</span>
                <input class="form-control" type="text" placeholder="Số lượng" name="soluong" value="'.$adsl[$i]['soluong'].'">
            </div>
            <button type="submit" name="submit" class="btn btn-info">Cập nhật</button>&nbsp;<a href="index.php?xoa='.$g.'&ctr=soluong" class="btn btn-info">Xóa</a>';} }
            ?>
        </form>  
        <?php  if(isset($w)){
                echo '<p style="color: red;">'.$w.'</p>';} ?>
     </div>
    </div>