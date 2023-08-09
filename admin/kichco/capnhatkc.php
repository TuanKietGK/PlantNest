<?php  
     if(isset($_GET['id'])){
     $_SESSION['get']=$_GET['id'];}
     if(isset($_SESSION['get'])){
     $g=$_SESSION['get'];}
     $adkc=$adm->adkc();
     $addm=$adm->addm();
?>
        <div class="card card-register mx-auto mt-2">
        <div class="card-header">Cập nhật kích cỡ</div>
        <div class="card-body">
        <form role="form" method="post" action="index.php">
        <input type="hidden" name="ctr" value="capnhatkc">
           <?php for($i=0;$i<count($adkc);$i++){
            if($g==$adkc[$i]['id_kichco']){
           echo '<div class="form-group">
                <span>Tên kích cỡ</span>
                <input class="form-control" placeholder="Tên kích cỡ" name="tenkc" value="'.$adkc[$i]['kichco'].'">
            </div>
            <div class="form-group">
                <span>Danh mục</span>
                <select class="form-control" name="danhmuc">
                <option value="'.$adkc[$i]['danhmuc'].'">'.$adkc[$i]['danhmuc'].'</option>';
                for($j=0;$j<count($addm);$j++){
                    if($addm[$j]['id_danhmuc']!=$adkc[$i]['id_danhmuc']){
                    echo  '<option value="'.$addm[$j]['danhmuc'].'">'.$addm[$j]['danhmuc'].'</option>';}
                }
            echo '</select>
            </div>
            <button type="submit" name="submit" class="btn btn-info">Cập nhật</button>&nbsp;<a href="index.php?xoa='.$g.'&ctr=kichco" class="btn btn-info">Xóa</a>';} }
            ?>
        </form>  
        <?php  if(isset($w)){
                echo '<p style="color: red;">'.$w.'</p>';} ?>
     </div>
    </div>