<?php
$error="";
if(isset($_POST['submit'])){
	if(empty($_POST['username'])||empty($_POST['password'])){
		$error ="username or password is empty";
		echo $error;
	}
	else{
		$username = $_POST['username'];
		$password = $_POST['password'];

		$connection = mysqli_connect("localhost","root","19940306", "siyapatha");

		if(mysqli_connect_errno()){
			echo "fail to connect.mysqli_connect_errorno()";
		}

		$username = stripslashes($username);
		$password = stripslashes($password);

		$query = mysqli_query($connection,"select*from siyapatha_login where password='$password' AND username ='$username'");

		$rows = mysqli_num_rows($query);

		if($rows==1){
			$userlevel = mysqli_fetch_array($query);
			session_start();
			$_SESSION['login_user'] = $username;
			header("location:/siyapatha/index.php");
		}
		else{
			$error = "username or password is invalid";
			echo $error;
		}
		mysqli_close($connection);
	}
}
?>
