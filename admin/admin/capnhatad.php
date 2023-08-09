<?php  
     if(isset($_GET['id'])){
     $_SESSION['get']=$_GET['id'];}
     if(isset($_SESSION['get'])){
     $g=$_SESSION['get'];}
     $adad=$adm->adad();
?>
        <div class="card card-register mx-auto mt-2">
        <div class="card-header">Cập nhật admin</div>
        <div class="card-body">
        <form role="form" method="post" action="index.php">
        <input type="hidden" name="ctr" value="capnhatad">
           <?php for($i=0;$i<count($adad);$i++){
            if($g==$adad[$i]['id_ad']){
           echo '<div class="form-group">
                <span>Username</span>
                <input class="form-control" placeholder="Username" name="user" value="'.$adad[$i]['username'].'">
            </div>
            <div class="form-group">
                <span>Password</span>
                <input class="form-control" type="text" placeholder="Password" name="pass" value="'.$adad[$i]['password'].'">
            </div>
            <button type="submit" name="submit" class="btn btn-info">Cập nhật</button>&nbsp;<a href="index.php?xoa='.$g.'&ctr=admin" class="btn btn-info">Xóa</a>';} }
            ?>
        </form>  
        <?php  if(isset($w)){
                echo '<p style="color: red;">'.$w.'</p>';} ?>
     </div>
    </div>