        <div class="card card-register mx-auto mt-2">
        <div class="card-header">Thêm sản phẩm</div>
        <div class="card-body">
        <form role="form" method="post" action="index.php">
        <input type="hidden" name="ctr" value="themdm">
           <div class="form-group">
                <span>Tên danh mục</span>
                <input class="form-control" type="text"  placeholder="Tên danh mục" name="tendm" value="">
            </div>
            <button type="submit" name="submit" class="btn btn-info">Thêm</button>
        </form>  
        <?php  if(isset($w)){
                echo '<p style="color: red;">'.$w.'</p>';} ?>
    </div>
    </div>