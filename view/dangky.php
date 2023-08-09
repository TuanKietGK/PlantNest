<!DOCTYPE html>
<html>
<head>
	<title>Login&Registration</title>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,700;1,200;1,700&display=swap');
		*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		font-family: 'Poppins', sans-serif;
		}
		.regist{
			display: flex;
			justify-content: center;
			align-items: center;
			min-height: 100vh;
			background: #f43648;
			transition: 0.5s;
		}
		.contain{
			position: relative;
			width: 800px;
			height: 500px;
			margin: 20px;
		}
		.pink{
			position: absolute;
			top: 40px;
			width: 100%;
			height: 420px;
			display: flex;
			justify-content: center;
			align-items: center;
			background: rgba(255,255,255,0.2);
			box-shadow: 0 5px 45px rgba(0,0,0,0.15);
		}
		.pink .box{
			position: relative;
			width: 50%;
			height: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
		}
		.pink .box h2{
			color: #fff;
			font-size: 1.2rem;
			font-weight: 500;
			margin-bottom: 10px;
		}
		.pink .box button{
			cursor: pointer;
			padding: 10px 20px;
			background-color: #fff;
			color: #333;
			font-size: 16px;
			font-weight: 500;
			border: none;
		}
		.formBx{
			position: absolute;
			top: 0;
			left: 50%;
			width: 50%;
			height: 100%;
			background-color: #fff;
			z-index: 1000;
			display: flex;
			justify-content: center;
			align-items: center;
			box-shadow: 0 5px 45px rgba(0,0,0,0.3);
			transition: 0.5s ease-in-out;
			overflow: hidden;
		}
		
		.regist.active{
			background: #03a9f4;
		}
		.formBx .form{
			position: absolute;
			left: 0;
			width: 100%;
			padding: 50px;
			transition: 0.5s;
		}
		.formBx .form form{
			width: 100%;
			display: flex;
			flex-direction: column;
		}
		.formBx .form form h3{
			font-size: 1.5rem;
			color: #333;
			margin-bottom: 20px;
			font-weight: 500;
		}
		.formBx .form form input{
			width: 100%;
			margin-bottom: 20px;
			padding: 10px;
			outline: none;
			font-size: 16px;
			border: 1px solid #333;
		}
		.formBx .form form input[type = 'submit']{
			background-color: #f43648;
			border: none;
			color: #fff;
			cursor: pointer;
			margin-bottom: 10px;
		}
		.formBx .form form input[type = 'reset']{
			background-color: black;
			border:none;
			color: #fff;
			cursor: pointer;
		}
		.formBx .form form .forgot{
			color: #333;
		}
		.formBx .SIf{
			left: -100%;
		}
		.formBx.active{
			left: 0;
		}
		.formBx.active .SIf{
			left: 0;
		}
		.formBx.active .SUf{
			left: 100%;
		}
		.formBx.active .SIf input[type = 'submit']{
			background-color: #03a9f4;
		}
		@media (max-width: 991px){
			.contain{
				max-width: 400px;
				height: 650px;
				display: flex;
				justify-content: center;
				align-items: center;
			}
			.contain .blue{
				top: 0;
				height: 100%;
			}
			.formBx{
				width: 100%;
				height: 500px;
				top: 0;
			}
			.blue .box{
				position: absolute;
				width: 100%;
				height: 150px;
				bottom: 0;
			}
			.box.SI{
				top: 0;
			}
			.formBx.active{
				top: 150px;
				left: 0;
			}
		}
	</style>
</head>
<body>
	<div class="regist">
	<div class="contain">
		<div class="pink">
			<div class="box SI">
				<h2>Already Have an Account ?</h2>
				<button class="SIbtn">Sign In</button>
			</div>
			<div class="box SU">
				<h2>Don't Have an Account ?</h2>
				<button class="SUbtn">Sign Up</button>
			</div>
		</div>
		<div class="formBx">
			<div class="form SIf">
				<form method="post" action="dangnhap.php">
				<input type="hidden" name="dangnhap" value="true">
					<h3>Sign In</h3>
					<input type="text" name="user"  placeholder="Username">
					<input type="password" name="pass" placeholder="Password">
					<input type="submit" value="Login">
					<input type="reset" value="Cancel" onclick="cancel()">
				</form>
			</div>

			<div class="form SUf">
				<form method="post" action="dangky.php">
				    <input type="hidden" name="dangky" value="true">
					<h3>Sign Up</h3>
					<input type="text" value="<?php if(isset($_POST['user'])){echo $_POST['user'];}?>" name="user" placeholder="Username">
					<small><b style="color: red;" ><?php if(isset($u)){echo $u;}?></b></small>
					<input type="email"value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>"  name="email"  placeholder="Email Address">
					<small><b style="color: red;"><?php if(isset($e)){echo $e;}?></b></small>
					<input type="password" value="<?php if(isset($_POST['pass'])){echo $_POST['pass'];}?>" name="pass"  placeholder="Password">
					<small><b style="color: red;"><?php if(isset($p)){echo $p;}?></b></small>
					<input type="password"value="<?php if(isset($_POST['repass'])){echo $_POST['repass'];}?>"  name="repass"  placeholder="Confirm Password">
					<small><b style="color: red;"><?php if(isset($r)){echo $r;}?></b></small>
					<input type="submit" value="Register">
					<input type="reset" value="Cancel" onclick="cancel()">
				</form>
			</div>
		</div>
	</div>
	</div>
	<script>
		const SIbtn = document.querySelector('.SIbtn');
		const SUbtn = document.querySelector('.SUbtn');
		const formBx = document.querySelector('.formBx');
		const body = document.querySelector('.regist')
		SIbtn.onclick = function(){
			formBx.classList.add('active')
			body.classList.add('active')
		}
		SUbtn.onclick = function(){
			formBx.classList.remove('active')
			body.classList.remove('active')
		}
		function cancel(){
		window.location = 'index.php'
		}
	</script>
</body>
</html>