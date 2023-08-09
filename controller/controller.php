<?php
   $obj= new database();
   if(isset($_GET['search'])){
      $damuc =$obj ->zxc();
      $dai= $obj-> fgh();
   }
  else{
   $damuc = $obj->qwe();
   $dai = $obj->ads();}

   $ct=$obj->chitiet();
   $kc=$obj->kichco();
   $ms=$obj->mausac();
   $am=$obj->anhmau();
   $sl=$obj->soluong();
   $all=$obj->all();
   $da=$obj->dall();
   $hd=$obj->huongdan();
   $ac=$obj->anhct();
   $lk=$obj->lienquan();
   $dlk=$obj->dlk();
   $bc=$obj->banchay();
   $mv=$obj->moive();
?>