<?php
	session_start();
	if(isset($_SESSION["id"])){
		header('location: http://hrdapps40');
	}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Foundation Section</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="alert">
		<h4>You can log-in to access Foundation Department Portal.</h4>
		<h4>For Assistance, Contact us at Foundation Section.</h4>
		<!--
		<h4>Press SHIFT + F5 to REFRESH!</h4>
		-->
	</div>
	<div class="wrapper">
		<div class="container">
			<div class="welcome">
				<p style="font-size: 40px;">Welcome</p>
			</div>
			<div class="form">
				<input id="username" type="text" placeholder="Username" autocomplete="on" />
				<input id="password" type="password" placeholder="Password" autocomplete="on" />
				<button id="login-button">Login</button><br />
				<!--
			<h3 id="visitor" style="color: yellow; margin-top: 15px;">Click here to Login as Visitor.</h3>-->
			</div>
			<h3 id="alert" style="color: red;"></h3>
		</div>
		<ul class="bg-bubbles">
			<li class="b0"></li>
			<li class="b1"></li>
			<li class="b2"></li>
			<li class="b3"></li>
			<li class="b4"></li>
			<li class="b5"></li>
			<li class="b6"></li>
			<li class="b7"></li>
			<li class="b8"></li>
			<li class="b9"></li>
		</ul>
		<!--
		-->
	</div>
	<script src='../bootstrap/js/jquery-3.2.1.js'></script>
	<script  src="js/index.js"></script>
</body>
</html>
