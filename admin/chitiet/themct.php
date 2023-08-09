<?php  
     $adsp=$adm->adsp();
?>
        <div class="card card-register mx-auto mt-2">
        <div class="card-header">Thêm chi tiết</div>
        <div class="card-body">
        <form role="form" method="post" action="index.php">
        <input type="hidden" name="ctr" value="themct">
        <div class="form-group">
            <span>Sản phẩm</span>
                <select class="form-control" name="sanpham">
                <?php for($j=0;$j<count($adsp);$j++){
                    echo  '<option  value="'.$adsp[$j]['tensp'].'">'.$adsp[$j]['tensp'].'</option>';
                } ?>
            </select>
            </div>
            <div class="form-group">
                <span>Ảnh chi tiết 1</span>
                <input class="form-control" type="text" placeholder="Ảnh chi tiết 1" name="anh1" value="">
            </div>
            <div class="form-group">
                <span>Ảnh chi tiết 2</span>
                <input class="form-control" type="text" placeholder="Ảnh chi tiết 2" name="anh2" value="">
            </div>
            <div class="form-group">
                <span>Ảnh chi tiết 3</span>
                <input class="form-control" type="text" placeholder="Ảnh chi tiết 3" name="anh3" value="">
            </div>
            <button type="submit" name="submit" class="btn btn-info">Thêm</button>
        </form>  
        <?php  if(isset($w)){
                echo '<p style="color: red;">'.$w.'</p>';} ?>
    </div>
    </div>