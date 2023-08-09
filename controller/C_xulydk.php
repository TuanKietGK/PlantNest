<?php
    session_start();
    require_once('model/database.php');
    $xuly= new database();
    $checkuser=$xuly->checkuser();
    if(($_POST['user']==null)||($_POST['email']==null)||($_POST['pass']==null)||($_POST['repass']==null)){
        if($_POST['user']==null){
            $u="Bạn chưa điền tên đăng nhập";
        }
        if($_POST['email']==null){
            $e="Bạn chưa điền email";
        }
        if($_POST['pass']==null){
            $p="Bạn chưa điền mật khẩu";
        }
        if($_POST['repass']==null){
            $r="Bạn chưa xác nhận mật khẩu";
        }
        require_once('view/dangky.php');
    }
    else if($checkuser!=null){
        $u=$checkuser;
        require_once('view/dangky.php');
    }
    else if($_POST['pass']!=$_POST['repass']){
        $r='Xác nhận mật khẩu phải giống mật khẩu';
        require_once('view/dangky.php');
    }
    else{
        $xuly->dangky();
        require_once('index.php');
    }

?>