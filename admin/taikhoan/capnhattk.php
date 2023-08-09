<?php  
     if(isset($_GET['id'])){
     $_SESSION['get']=$_GET['id'];}
     if(isset($_SESSION['get'])){
     $g=$_SESSION['get'];}
     $adtk=$adm->adtk();
?>
        <div class="card card-register mx-auto mt-2">
        <div class="card-header">Cập nhật tài khoản</div>
        <div class="card-body">
        <form role="form" method="post" action="index.php">
        <input type="hidden" name="ctr" value="capnhattk">
           <?php for($i=0;$i<count($adtk);$i++){
            if($g==$adtk[$i]['id_user']){
           echo '<div class="form-group">
                <span>Username</span>
                <input class="form-control" placeholder="Username" name="user" value="'.$adtk[$i]['username'].'">
            </div>
            <div class="form-group">
                <span>Email</span>
                <input class="form-control" type="text" placeholder="Email" name="email" value="'.$adtk[$i]['email'].'">
            </div>
            <div class="form-group">
                <span>Password</span>
                <input class="form-control" type="text" placeholder="Password" name="pass" value="'.$adtk[$i]['pass'].'">
            </div>
            <button type="submit" name="submit" class="btn btn-info">Cập nhật</button>&nbsp;<a href="index.php?xoa='.$g.'&ctr=taikhoan" class="btn btn-info">Xóa</a>';} }
            ?>
        </form>  
        <?php  if(isset($w)){
                echo '<p style="color: red;">'.$w.'</p>';} ?>
     </div>
    </div>