<!DOCTYPE html>
<html>
<head>
	<title>add user</title>
</head>
<body>

	<div class="container">
		<h1 align="center">ADD USER</h1>
		<a href="http://localhost/siyapatha/index.php">HOME</a>
		<div class="dropdown">
			<button class="dropbtn">ADD</button>
			<div class="dropdown-content">
				<a href="addcustomer.php">CUSTOMER</a>
				<a href="additem.php">ITEM</a>
				<a href="addorder.php">ORDER</a>
				<a href="adduser.php">USER</a>
			</div>
		</div>
		<a href="items.php">ITEM</a>
		<a href="cutomer.php">CUSTOMER</a>
		<a href="deliver.php">DELIVERY</a>
		<a href="updatequery.php">UPDATES</a>
		<a href="branch.php">BRANCH</a>
	</div>

	<div class="box">
	<form action="adduser.php" method="post" >
		<label for="user_id">USER NAME______</label>
		<input type="text" name="user_id"><br>

		<label for="user_password">USER PASSWORD_</label>
		<input type="password" name="user_password"><br>
		
		<label for="permission">PERMISSION TYPE</label>
		<select name="permission">
			<option value="superadmin">SUPER ADMIN</option>
			<option value="showroomoperator">SHOW ROOM OPERATOR</option>
			<option value="stockkeeper">STOCK KEEPER</option>
		</select><br>
		<label for="branch">BRANCH_________</label>
		<select name="branch">
			<option value="administrator">ADMINISTRATOR</option>
			<option value="moratuwa">MORATUWA</option>
			<option value="galle">GALLE</option>
			<option value="kandy">KANDY</option>
			<option value="mathara">MATHARA</option>
			<option value="rathnapura">RATHNAPURA</option>
		</select><br>

		<input type="submit" name="submit" value="SUBMIT">
		<input type="reset" name="reset" value="CLEAR">
	</form>	
	</div>
</body>
</html>

<?php

$connection = mysqli_connect("localhost","root","","siyapatha");
if(isset($_POST['submit'])){

	if(isset($_POST['user_id'])){
		
		$user_id       = $_POST['user_id'];
		$user_password = $_POST['user_password'];
		$permission    = $_POST['permission'];
		$branch        = $_POST['branch'];

		echo $user_id."<br>";
		echo $user_password."<br>";
		echo $permission."<br>";
		echo $branch."<br>";
		$query = "INSERT INTO users(user_id,user_name, permission, branch) VALUES('$user_id','$user_password', '$permission', '$branch')";
		$result = mysqli_query($connection,$query);
		if($result){
			echo "successfull";
		}
		else{
			echo "unsuccessfull";
		}
	}
		
}
mysqli_close($connection);
?>