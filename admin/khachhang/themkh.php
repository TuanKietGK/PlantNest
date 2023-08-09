        <div class="card card-register mx-auto mt-2">
        <div class="card-header">Thêm khách hàng</div>
        <div class="card-body">
        <form role="form" method="post" action="index.php">
        <input type="hidden" name="ctr" value="themkh">
           <div class="form-group">
                <span>Tên khách hàng</span>
                <input class="form-control" type="text"  placeholder="Tên khách hàng" name="tenkh" value="">
            </div>
            <div class="form-group">
                <span>Email</span>
                <input class="form-control" type="email" placeholder="Email" name="email" value="">
            </div>
            <div class="form-group">
                <span>Địa chỉ</span>
                <input class="form-control" type="text" placeholder="Địa chỉ" name="diachi" value="">
            </div>
            <div class="form-group">
                <span>Sđt</span>
                <input class="form-control" type="number" placeholder="Sđt" name="sdt" value="">
            </div>
            <button type="submit" name="submit" class="btn btn-info">Thêm</button>
        </form>  
        <?php  if(isset($w)){
                echo '<p style="color: red;">'.$w.'</p>';} ?>
    </div>
    </div>