<!doctype html>
<?php
 
session_start();
	header('Content-Type: text/html; charset=UTF-8');
	if(isset($_POST["submit"])){
		include_once('include/xly_csdl.php');
		$username=$_POST['txtUsername'];
		$password=$_POST['txtPassword'];
		$caulenh="SELECT * FROM `acountsUser` WHERE `username` = '".$username."' AND `password` = '".$password."'";
		$tableUser=Doc_Bang($caulenh);
		if($tableUser -> rowCount()>0)
		{
			foreach($tableUser as $user)
			{
				$_SESSION['username']=$user['username'];
				$_SESSION['id']=$user['IDuser'];
				$_SESSION['balance']=$user['balance'];
				$_SESSION['typeAcount']=$user['type'];
			}
			$typeAcount=$_SESSION['typeAcount'];
			if($typeAcount=='admin'){
				echo"<script>location.href = 'Admin.php';</script>";
			}
			else{
				echo"<script>location.href = 'User.php';</script>";
			}
		}else{
			echo"<script>alert('Dang nhap sai');</script>";
		}
	}
var_dump($_SESSION);exit();
?>
<html>
<head>
<meta charset="utf-8">
<title>ỨNG DỤNG QUẢN LÝ QUÁN NET</title>
	<link rel="stylesheet" href="css/style.css">
</head>
	
<body class="bg">
	<div class="login-box">
		<img src="image/user.jpg" class="user-log" alt="">
		<h1>Login Here</h1>
		<form action="login.php" method="post">
		 <p>Username</p>
			<input type="text" name="txtUsername" placeholder="Enter Username">
			<p>Password</p>
			<input type="password" name="txtPassword" placeholder="Enter Password">
			<input type="submit" name="submit"  value="Login">
			<a href="#" >Lost your password?</a><br>
			<a href="#">Dont have an account?</a>
		</form>
	</div>
</body>
</html>