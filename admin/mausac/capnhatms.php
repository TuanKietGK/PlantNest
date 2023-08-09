<?php  
     if(isset($_GET['id'])){
     $_SESSION['get']=$_GET['id'];}
     if(isset($_SESSION['get'])){
     $g=$_SESSION['get'];}
     $adms=$adm->adms();
     $adsp=$adm->adsp();
?>
        <div  class="card card-register mx-auto mt-2">
        <div class="card-header">Cập nhật màu sắc</div>
        <div class="card-body">
        <form role="form" method="post" action="index.php">
        <input type="hidden" name="ctr" value="capnhatms">
           <?php for($i=0;$i<count($adms);$i++){
            if($g==$adms[$i]['id_mausac']){
           echo '<div class="form-group">
                <span>Tên màu</span>
                <input class="form-control" placeholder="Tên màu sắc" name="tenms" value="'.$adms[$i]['mausac'].'">
            </div>
            <div class="form-group">
                <span>Sản phẩm</span>
                <select class="form-control" name="sanpham">
                <option  value="'.$adms[$i]['tensp'].'">'.$adms[$i]['tensp'].'</option>';
                for($j=0;$j<count($adsp);$j++){
                    if($adsp[$j]['id_sp']!=$adms[$i]['id_sp']){
                    echo  '<option  value="'.$adsp[$j]['tensp'].'">'.$adsp[$j]['tensp'].'</option>';}
                }
            echo '</select>
            </div>
            <div class="form-group">
                <span>Ảnh mô tả</span>
                <input class="form-control" type="text" placeholder="Ảnh mô tả" name="anh" value="'.$adms[$i]['anh'].'">
            </div>
            <button type="submit" name="submit" class="btn btn-info">Cập nhật</button>&nbsp;<a href="index.php?xoa='.$g.'&ctr=mausac" class="btn btn-info">Xóa</a>';} }
            ?>
        </form>  
        <?php  if(isset($w)){
                echo '<p style="color: red;">'.$w.'</p>';} ?>
     </div>
    </div>