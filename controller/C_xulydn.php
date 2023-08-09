<?php
    session_start();
    require_once('model/database.php');
    $xuly= new database();
    $dangnhap=$xuly->dangnhap();
    if(($_POST['user']==null)||($_POST['pass']==null)){
        if($_POST['user']==null){
            $u="Bạn chưa điền tên đăng nhập";
        }
        if($_POST['pass']==null){
            $p="Bạn chưa điền mật khẩu";
        }
        require_once('view/dangnhap.php');
    }
    else if($dangnhap==null){
        $w="Sai tài khoản hoặc mật khẩu";
        require_once('view/dangnhap.php');
    }
    else{
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        require_once('index.php');
    }

?>