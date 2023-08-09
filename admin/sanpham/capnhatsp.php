<?php  
     if(isset($_GET['id'])){
     $_SESSION['get']=$_GET['id'];}
     if(isset($_SESSION['get'])){
     $g=$_SESSION['get'];}
     $adsp=$adm->adsp();
     $addm=$adm->addm();
?>
        <div class="card card-register mx-auto mt-2">
        <div class="card-header">Cập nhật sản phẩm</div>
        <div class="card-body">
        <form role="form" method="post" action="index.php">
        <input type="hidden" name="ctr" value="capnhatsp">
           <?php for($i=0;$i<count($adsp);$i++){
            if($g==$adsp[$i]['id_sp']){
           echo '<div class="form-group">
                <span>Tên sản phẩm</span>
                <input class="form-control" placeholder="Tên sản phẩm" name="tensp" value="'.$adsp[$i]['tensp'].'">
            </div>
            <div class="form-group">
                <span>Danh mục</span>
                <select class="form-control" name="danhmuc">
                <option value="'.$adsp[$i]['danhmuc'].'">'.$adsp[$i]['danhmuc'].'</option>';
                for($j=0;$j<count($addm);$j++){
                    if($addm[$j]['id_danhmuc']!=$adsp[$i]['id_danhmuc']){
                    echo  '<option value="'.$addm[$j]['danhmuc'].'">'.$addm[$j]['danhmuc'].'</option>';}
                }
            echo '</select>
            </div>
            <div class="form-group">
                <span>Ảnh mô tả</span>
                <input class="form-control" type="text" placeholder="Ảnh mô tả" name="anh" value="'.$adsp[$i]['anh'].'">
            </div>
            <div class="form-group">
                <span>Ảnh bìa</span>
                <input class="form-control" type="text" placeholder="Ảnh bìa" name="anh0" value="'.$adsp[$i]['anh0'].'">
            </div>
            <div class="form-group">
                <span>Giá</span>
                <input class="form-control" type="number" placeholder="Giá" name="gia" value="'.$adsp[$i]['gia'].'">
            </div>
            <div class="form-group">
                <span>Đã bán</span>
                <input class="form-control" type="number" placeholder="Đã bán" name="daban" value="'.$adsp[$i]['daban'].'">
            </div>
            <button type="submit" name="submit" class="btn btn-info">Cập nhật</button>&nbsp;<a href="index.php?xoa='.$g.'&ctr=sanpham" class="btn btn-info">Xóa</a>';} }
            ?>
        </form>  
        <?php  if(isset($w)){
                echo '<p style="color: red;">'.$w.'</p>';} ?>
     </div>
    </div>
