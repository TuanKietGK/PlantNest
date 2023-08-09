<?php  
     $addm=$adm->addm();
?>
        <div class="card card-register mx-auto mt-2">
        <div class="card-header">Thêm sản phẩm</div>
        <div class="card-body">
        <form role="form" method="post" action="index.php">
        <input type="hidden" name="ctr" value="themsp">
           <div class="form-group">
                <span>Tên sản phẩm</span>
                <input class="form-control" type="text"  placeholder="Tên sản phẩm" name="tensp" value="">
            </div>
            <div class="form-group">
                <span>Danh mục</span>
                <select class="form-control" name="danhmuc">
                <?php for($j=0;$j<count($addm);$j++){
                    echo  '<option value="'.$addm[$j]['danhmuc'].'">'.$addm[$j]['danhmuc'].'</option>';
                } ?>
            </select>
            </div>
            <div class="form-group">
                <span>Ảnh mô tả</span>
                <input class="form-control" type="text" placeholder="Ảnh mô tả" name="anh" value="">
            </div>
            <div class="form-group">
                <span>Ảnh bìa</span>
                <input class="form-control" type="text" placeholder="Ảnh bìa" name="anh0" value="">
            </div>
            <div class="form-group">
                <span>Giá</span>
                <input class="form-control" type="number" placeholder="Giá" name="gia" value="">
            </div>
            <div class="form-group">
                <span>Đã bán</span>
                <input class="form-control" type="number" placeholder="Đã bán" name="daban" value="">
            </div>
            <button type="submit" name="submit" class="btn btn-info">Thêm</button>
        </form>  
        <?php  if(isset($w)){
                echo '<p style="color: red;">'.$w.'</p>';} ?>
    </div>
    </div>
