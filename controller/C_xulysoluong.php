<?php if(!isset($_GET['sl'])){
	$_GET['sl']=1;
   }
   else{
	if(isset($_GET['cong'])){
		if($_GET['sl']==$sl){
		  $_GET['sl']+=0;
		}
		else{ $_GET['sl']+=1;}
	}
	if(isset($_GET['tru'])){
		if($_GET['sl']>0){
	  $_GET['sl']-=1;}
  }
   } ?>