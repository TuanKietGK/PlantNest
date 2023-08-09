<?php
if(isset($_POST['dangnhap'])){
    if($_POST['dangnhap']=='true'){
        require_once('controller/C_xulydn.php');
    }
}
else{
    require_once('view/dangnhap.php');
}

 ?>