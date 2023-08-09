<div class="card card-register mx-auto mt-2">
        <div class="card-header">Thêm tài khoản</div>
        <div class="card-body">
        <form role="form" method="post" action="index.php">
        <input type="hidden" name="ctr" value="themtk">
           <div class="form-group">
                <span>Username</span>
                <input class="form-control" type="text"  placeholder="Username" name="user" value="">
            </div>
            <div class="form-group">
                <span>Email</span>
                <input class="form-control" type="email" placeholder="Email" name="email" value="">
            </div>
            <div class="form-group">
                <span>Password</span>
                <input class="form-control" type="text" placeholder="Password" name="pass" value="">
            </div>
            <button type="submit" name="submit" class="btn btn-info">Thêm</button>
        </form>  
        <?php  if(isset($w)){
                echo '<p style="color: red;">'.$w.'</p>';} ?>
    </div>
    </div>