<?php  
     if(isset($_GET['id'])){
     $_SESSION['get']=$_GET['id'];}
     if(isset($_SESSION['get'])){
     $g=$_SESSION['get'];}
     $adhd=$adm->adhd();
     $addm=$adm->addm();
?>
        <div  class="card card-register mx-auto mt-2">
        <div class="card-header">Cập nhật hướng dẫn</div>
        <div class="card-body">
        <form role="form" method="post" action="index.php">
        <input type="hidden" name="ctr" value="capnhathd">
           <?php for($i=0;$i<count($adhd);$i++){
            if($g==$adhd[$i]['id_huongdan']){
           echo '<div class="form-group">
                <span>Danh mục</span>
                <select class="form-control" name="danhmuc">
                <option  value="'.$adhd[$i]['danhmuc'].'">'.$adhd[$i]['danhmuc'].'</option>';
                for($j=0;$j<count($addm);$j++){
                    if($addm[$j]['id_danhmuc']!=$adhd[$i]['id_danhmuc']){
                    echo  '<option  value="'.$addm[$j]['danhmuc'].'">'.$addm[$j]['danhmuc'].'</option>';}
                }
            echo '</select>
            </div>
            <div class="form-group">
                <span>Ảnh hướng dẫn 1</span>
                <input class="form-control" type="text" placeholder="Ảnh hướng dẫn 1" name="anh1" value="'.$adhd[$i]['anh1'].'">
            </div>
            <div class="form-group">
                <span>Ảnh hướng dẫn 2</span>
                <input class="form-control" type="text" placeholder="Ảnh hướng dẫn 2" name="anh2" value="'.$adhd[$i]['anh2'].'">
            </div>
            <button type="submit" name="submit" class="btn btn-info">Cập nhật</button>&nbsp;<a href="index.php?xoa='.$g.'&ctr=huongdan" class="btn btn-info">Xóa</a>';} }
            ?>
        </form>  
        <?php  if(isset($w)){
                echo '<p style="color: red;">'.$w.'</p>';} ?>
     </div>
    </div>