<?php

include('login.php');
if(isset($_SESSION['login.php'])){
	header("location:/siyapatha/index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title> siyapatha</title>
	<link rel="stylesheet" href="style.css" type ="text/css">
	<link rel="shortcut icon" type="images/x-icon" href="../images/one.jpg">
</head>
<body>
	<h1 align="Center" ></h1>

	<div id="container">
		<form action="login.php" method="post">
			<div class="username-text">USERNAME</div>
			<div class="password-text">PASSWORD</div>
			<div class="username-field">
				<input type="text" name="username" value="">
			</div>
			<div class="password-field">
				<input type="password" name="password" value="">
			</div>
			<input type="submit" name="submit" value="LOGIN">
		</form>

	</div>
	
</body>
</html>
