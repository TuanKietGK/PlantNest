<?php
       if(isset($_GET['ct'])){
		if(!isset($_SESSION['dx'][1])){
			$_SESSION['dx'][1]=$_GET['ct'];
		}
		else if(($_GET['ct']!=$_SESSION['dx'][1])&&(!isset($_SESSION['dx'][2]))){
			$_SESSION['dx'][2]=$_SESSION['dx'][1];
			$_SESSION['dx'][1]=$_GET['ct'];
		}
		else if(($_GET['ct']!=$_SESSION['dx'][1])&&($_GET['ct']!=$_SESSION['dx'][2])&&(!isset($_SESSION['dx'][3]))){
			$_SESSION['dx'][3]=$_SESSION['dx'][2];
			$_SESSION['dx'][2]=$_SESSION['dx'][1];
			$_SESSION['dx'][1]=$_GET['ct'];
		}
		else if(($_GET['ct']!=$_SESSION['dx'][1])&&($_GET['ct']!=$_SESSION['dx'][2])&&($_GET['ct']!=$_SESSION['dx'][3])&&(!isset($_SESSION['dx'][4]))){
			$_SESSION['dx'][4]=$_SESSION['dx'][3];
			$_SESSION['dx'][3]=$_SESSION['dx'][2];
			$_SESSION['dx'][2]=$_SESSION['dx'][1];
			$_SESSION['dx'][1]=$_GET['ct'];
		}
		else if(($_GET['ct']!=$_SESSION['dx'][1])&&($_GET['ct']!=$_SESSION['dx'][2])&&($_GET['ct']!=$_SESSION['dx'][3])&&($_GET['ct']!=$_SESSION['dx'][4])){
			$_SESSION['dx'][4]=$_SESSION['dx'][3];
			$_SESSION['dx'][3]=$_SESSION['dx'][2];
			$_SESSION['dx'][2]=$_SESSION['dx'][1];
			$_SESSION['dx'][1]=$_GET['ct'];
		} }
 ?>