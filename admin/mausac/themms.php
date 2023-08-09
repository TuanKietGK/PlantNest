<?php  
     $adsp=$adm->adsp();
?>
        <div class="card card-register mx-auto mt-2">
        <div class="card-header">Thêm màu sắc</div>
        <div class="card-body">
        <form role="form" method="post" action="index.php">
        <input type="hidden" name="ctr" value="themms">
        <div class="form-group">
                <span>Tên màu</span>
                <input class="form-control" placeholder="Tên màu sắc" name="tenms" value="">
            </div>
            <div class="form-group">
                <span>Sản phẩm</span>
                <select class="form-control" name="sanpham">
                <?php for($j=0;$j<count($adsp);$j++){
                    echo  '<option  value="'.$adsp[$j]['tensp'].'">'.$adsp[$j]['tensp'].'</option>';
                } ?>
            </select>
            </div>
            <div class="form-group">
                <span>Ảnh mô tả</span>
                <input class="form-control" type="text" placeholder="Ảnh mô tả" name="anh" value="">
            </div>
            <button type="submit" name="submit" class="btn btn-info">Thêm</button>
        </form>  
        <?php  if(isset($w)){
                echo '<p style="color: red;">'.$w.'</p>';} ?>
    </div>
    </div>