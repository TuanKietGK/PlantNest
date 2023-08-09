<?php  
     $adsp=$adm->adsp();
?>
        <div  class="card card-register mx-auto mt-2">
        <div class="card-header">Thêm số lượng</div>
        <div class="card-body">
        <form role="form" method="post" action="index.php">
        <div class="form-group">
                <span>Sản phẩm</span>
                <select class="form-control" name="sp">
                <?php for($j=0;$j<count($adsp);$j++){
                    echo  '<option value="'.$adsp[$j]['tensp'].'">'.$adsp[$j]['tensp'].'</option>';
                } ?>
            </select>
            </div>
            <button type="submit" name="submit" class="btn btn-info">Thêm</button>
        </form>  
        <?php  if(isset($w)){
                echo '<p style="color: red;">'.$w.'</p>';} ?>
     </div>
    </div>