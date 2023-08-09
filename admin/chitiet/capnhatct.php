<?php  
     if(isset($_GET['id'])){
     $_SESSION['get']=$_GET['id'];}
     if(isset($_SESSION['get'])){
     $g=$_SESSION['get'];}
     $adct=$adm->adct();
     $adsp=$adm->adsp();
?>
        <div  class="card card-register mx-auto mt-2">
        <div class="card-header">Cập nhật chi tiết</div>
        <div class="card-body">
        <form role="form" method="post" action="index.php">
        <input type="hidden" name="ctr" value="capnhatct">
           <?php for($i=0;$i<count($adct);$i++){
            if($g==$adct[$i]['id_chitiet']){
           echo '<div class="form-group">
                <span>Sản phẩm</span>
                <select class="form-control" name="sanpham">
                <option  value="'.$adct[$i]['tensp'].'">'.$adct[$i]['tensp'].'</option>';
                for($j=0;$j<count($adsp);$j++){
                    if($adsp[$j]['id_sp']!=$adct[$i]['id_sp']){
                    echo  '<option  value="'.$adsp[$j]['tensp'].'">'.$adsp[$j]['tensp'].'</option>';}
                }
            echo '</select>
            </div>
            <div class="form-group">
                <span>Ảnh chi tiết 1</span>
                <input class="form-control" type="text" placeholder="Ảnh chi tiết 1" name="anh1" value="'.$adct[$i]['anh1'].'">
            </div>
            <div class="form-group">
                <span>Ảnh chi tiết 2</span>
                <input class="form-control" type="text" placeholder="Ảnh chi tiết 2" name="anh2" value="'.$adct[$i]['anh2'].'">
            </div>
            <div class="form-group">
                <span>Ảnh chi tiết 3</span>
                <input class="form-control" type="text" placeholder="Ảnh chi tiết 3" name="anh3" value="'.$adct[$i]['anh3'].'">
            </div>
            <button type="submit" name="submit" class="btn btn-info">Cập nhật</button>&nbsp;<a href="index.php?xoa='.$g.'&ctr=chitiet" class="btn btn-info">Xóa</a>';} }
            ?>
        </form>  
        <?php  if(isset($w)){
                echo '<p style="color: red;">'.$w.'</p>';} ?>
     </div>
    </div>