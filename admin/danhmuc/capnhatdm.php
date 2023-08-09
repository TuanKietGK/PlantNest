<?php  
     if(isset($_GET['id'])){
     $_SESSION['get']=$_GET['id'];}
     if(isset($_SESSION['get'])){
     $g=$_SESSION['get'];}
     $addm=$adm->addm();
?>
        <div class="card card-register mx-auto mt-2">
        <div class="card-header">Cập nhật sản phẩm</div>
        <div class="card-body">
        <form role="form" method="post" action="index.php">
        <input type="hidden" name="ctr" value="capnhatdm">
           <?php for($i=0;$i<count($addm);$i++){
            if($g==$addm[$i]['id_danhmuc']){
           echo '<div class="form-group">
                <span>Tên danh mục</span>
                <input class="form-control" placeholder="Tên danh mục" name="tendm" value="'.$addm[$i]['danhmuc'].'">
            </div>
            <button type="submit" name="submit" class="btn btn-info">Cập nhật</button>&nbsp;<a href="index.php?xoa='.$g.'&ctr=danhmuc" class="btn btn-info">Xóa</a>';} }
            ?>
        </form>  
        <?php  if(isset($w)){
                echo '<p style="color: red;">'.$w.'</p>';} ?>
     </div>
    </div>