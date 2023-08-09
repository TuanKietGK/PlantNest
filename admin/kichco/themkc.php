<?php  
     $addm=$adm->addm();
?>
        <div class="card card-register mx-auto mt-2">
        <div class="card-header">Thêm kích cỡ</div>
        <div class="card-body">
        <form role="form" method="post" action="index.php">
        <input type="hidden" name="ctr" value="themkc">
           <div class="form-group">
                <span>Tên kích cỡ</span>
                <input class="form-control" type="text"  placeholder="Tên kích cỡ" name="tenkc" value="">
            </div>
            <div class="form-group">
                <span>Danh mục</span>
                <select class="form-control" name="danhmuc">
                <?php for($j=0;$j<count($addm);$j++){
                    echo  '<option value="'.$addm[$j]['danhmuc'].'">'.$addm[$j]['danhmuc'].'</option>';
                } ?>
            </select>
            </div>
            <button type="submit" name="submit" class="btn btn-info">Thêm</button>
        </form>  
        <?php  if(isset($w)){
                echo '<p style="color: red;">'.$w.'</p>';} ?>
    </div>
    </div>