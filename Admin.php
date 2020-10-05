<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin</title>
	<link rel="stylesheet" href="css/styleAdmin.css">
	<script src="https://kit.fontawesome.com/73938bce65.js" crossorigin="anonymous"></script>
</head>
<?php
	session_start();
	
	
	?>
<body>
	<div class="wrap-container">
		<div class="container top">
			<img src="image/logonet.png" width="80px" alt="">
			<h2>Không chơi thì thôi</h2>
			<div class="logouser">
				<i class="far fa-user"></i>
				<p><?php echo $_SESSION['username']; ?></p>
				<p class="status"><span class="dot"></span><label for="">Đang hoạt động</label></p>
				
			</div>
		</div>
		<div class="container left">
			<ul>
				<li><a href="#"><i class="fas fa-tv"></i>Hệ thống máy</a></li>
				<li><a href="#"><i class="fas fa-users"></i>Hội viên</a></li>
				<li><a href="#"><i class="fas fa-book-open"></i>Dịch vụ</a></li>
				<li><a href="#"><i class="fas fa-donate"></i>Bảng giá</a></li>
			</ul>
		</div>
		<div class="container right">
			<div class="container right center">3</div>
			<div class="container right footer">4</div>
		</div>
	</div>
</body>
</html>