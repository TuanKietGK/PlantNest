<?php  
     $addm=$adm->addm();
?>
        <div class="card card-register mx-auto mt-2">
        <div class="card-header">Thêm hướng dẫn</div>
        <div class="card-body">
        <form role="form" method="post" action="index.php">
        <input type="hidden" name="ctr" value="themhd">
        <div class="form-group">
            <span>Danh mục</span>
                <select class="form-control" name="danhmuc">
                <?php for($j=0;$j<count($addm);$j++){
                    echo  '<option  value="'.$addm[$j]['danhmuc'].'">'.$addm[$j]['danhmuc'].'</option>';
                } ?>
            </select>
            </div>
            <div class="form-group">
                <span>Ảnh hướng dẫn 1</span>
                <input class="form-control" type="text" placeholder="Ảnh hướng dẫn 1" name="anh1" value="">
            </div>
            <div class="form-group">
                <span>Ảnh hướng dẫn 2</span>
                <input class="form-control" type="text" placeholder="Ảnh hướng dẫn 2" name="anh2" value="">
            </div>
            <button type="submit" name="submit" class="btn btn-info">Thêm</button>
        </form>  
        <?php  if(isset($w)){
                echo '<p style="color: red;">'.$w.'</p>';} ?>
    </div>
    </div>