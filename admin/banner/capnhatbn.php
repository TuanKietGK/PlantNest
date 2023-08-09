<?php  
     if(isset($_GET['id'])){
     $_SESSION['get']=$_GET['id'];}
     if(isset($_SESSION['get'])){
     $g=$_SESSION['get'];}
     $adbn=$adm->adbn();
?>
        <div class="card card-register mx-auto mt-2">
        <div class="card-header">Cập nhật banner</div>
        <div class="card-body">
        <form role="form" method="post" action="index.php">
        <input type="hidden" name="ctr" value="capnhatbn">
           <?php for($i=0;$i<count($adbn);$i++){
            if($g==$adbn[$i]['id_banner']){
           echo '<div class="form-group">
                <span>Banner</span>
                <input class="form-control" placeholder="Banner" name="banner" value="'.$adbn[$i]['banner'].'">
            </div>
            <button type="submit" name="submit" class="btn btn-info">Cập nhật</button>&nbsp;<a href="index.php?xoa='.$g.'&ctr=banner" class="btn btn-info">Xóa</a>';} }
            ?>
        </form>  
        <?php  if(isset($w)){
                echo '<p style="color: red;">'.$w.'</p>';} ?>
     </div>
    </div>