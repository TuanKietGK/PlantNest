<?php
     if(isset($_POST['sp'])){
     $_SESSION['sp']=$_POST['sp'];}
     $adms=$adm->adms();
     $adsp=$adm->adsp();
     $adkc=$adm->adkc();
?>
        <div  class="card card-register mx-auto mt-2">
        <div class="card-header">Thêm số lượng</div>
        <div class="card-body">
        <form role="form" method="post" action="index.php">
        <input type="hidden" name="ctr" value="themsl1">
        <div class="form-group">
                <span>Sản phẩm</span>
                <input  class="form-control" value="<?php echo $_POST['sp']?>" disabled>
            </div>
        <div class="form-group">
                <span>Màu sắc</span>
                <select class="form-control" name="mausac">
                <?php for($j=0;$j<count($adms);$j++){
                    if($adms[$j]['tensp']==$_POST['sp']){
                    echo  '<option value="'.$adms[$j]['mausac'].'">'.$adms[$j]['mausac'].'</option>';}
                } ?>
            </select>
            </div>
            <div class="form-group">
                <span>Kích cỡ</span>
                <select class="form-control" name="kichco">
                <?php for($j=0;$j<count($adkc);$j++){
                    for($k=0;$k<count($adsp);$k++){
                    if(($adkc[$j]['id_danhmuc']==$adsp[$k]['id_danhmuc'])&&($adsp[$k]['tensp']==$_POST['sp'])){
                    echo  '<option value="'.$adkc[$j]['kichco'].'">'.$adkc[$j]['kichco'].'</option>';}}
                } ?>
            </select>
            </div>
            <div class="form-group">
                <span>Số lượng</span>
                <input class="form-control" type="text" placeholder="Số lượng" name="soluong" value="">
            </div>
            <button type="submit" name="submit" class="btn btn-info">Thêm</button>
        </form>  
        <?php  if(isset($w)){
                echo '<p style="color: red;">'.$w.'</p>';} ?>
     </div>
    </div>