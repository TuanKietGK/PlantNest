<?php
         if(isset($_GET['add'])){
                 for($i=1;$i<=$slmax;$i++){
                    if($_GET['add']==$i){
                 $_SESSION['gh'][$i]['daban']=$ct['daban'];
                 $_SESSION['gh'][$i]['id_sp']=$ct['id_sp'];
                 $_SESSION['gh'][$i]['id_sl']=$sl['id_sl'];
                 $_SESSION['gh'][$i]['anh']=$am['anh']; 
                 $_SESSION['gh'][$i]['tensp']=$ct['tensp'];
                 $_SESSION['gh'][$i]['gia']=$ct['gia'];
                 $_SESSION['gh'][$i]['kichco']=$kc2['kichco'];
                 $_SESSION['gh'][$i]['mausac']=$am['mausac'];
                 $_SESSION['gh'][$i]['slmax']=$sl['soluong'];
                 if(isset( $_SESSION['sl'][$i])){
                 $_SESSION['gh'][$i]['sl']+=$_GET['sl'];}
                 else{
                    $_SESSION['gh'][$i]['sl']=$_GET['sl'];
                 }}}
             }
?>