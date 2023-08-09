<?php  
     if(isset($_GET['id'])){
     $_SESSION['get']=$_GET['id'];}
     if(isset($_SESSION['get'])){
     $g=$_SESSION['get'];}
     $adtr=$adm->adtr();
?>
        <div class="card card-register mx-auto mt-2">
        <div class="card-header">Cập nhật tình trạng</div>
        <div class="card-body">
        <form role="form" method="post" action="index.php">
        <input type="hidden" name="ctr" value="capnhattr">
           <?php for($i=0;$i<count($adtr);$i++){
            if($g==$adtr[$i]['id_tinhtrang']){
           echo '<div class="form-group">
                <span>Tên tình trạng</span>
                <input class="form-control" placeholder="Tên tình trạng" name="tinhtrang" value="'.$adtr[$i]['tinhtrang'].'">
            </div>
            <button type="submit" name="submit" class="btn btn-info">Cập nhật</button>&nbsp;<a href="index.php?xoa='.$g.'&ctr=tinhtrang" class="btn btn-info">Xóa</a>';} }
            ?>
        </form>  
        <?php  if(isset($w)){
                echo '<p style="color: red;">'.$w.'</p>';} ?>
     </div>
    </div>