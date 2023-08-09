<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/2669f91611.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: 'Poppins', sans-serif;
		}
		body{
			background: #343a40;
		}
		form{
			width: 30%;
			background: white;
			margin: 50px auto;
			padding: 20px;
			border-radius: 10px;
		}
		form h3{
			font-weight: bold;
			margin-bottom: 30px;
		}
		form .form-group input{
			padding: 25px 12px;
		}
		form button{
			margin-top: 20px;
			width: 100%;
		}
	</style>
</head>
<body>
	<form action="xuly.php" method="post">
		<h3>Login</h3>
  		<div class="form-group">
    		<input type="text" name="user" value="<?php if(isset($_POST['user'])){ echo $_POST['user'];} ?>" class="form-control" placeholder="Username">
  		</div>
  		<div class="form-group">
    		<input type="password" name="pass" value="<?php if(isset($_POST['pass'])){ echo $_POST['pass'];} ?>" class="form-control" placeholder="Password">
  		</div>
  		<button type="submit" class="btn btn-primary">Login</button>
  		<button type="reset" class="btn btn-dark">Cancel</button>
        <b style="color: red;"><?php 
            if(isset($w)){
                echo $w;
            }
        ?></b>
	</form>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>