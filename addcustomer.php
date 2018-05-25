<?php
session_start();
if(!isset($_SESSION['login_user'])){
	header("location:login/index.php");
}
?>

<?php
$connection = mysqli_connect("localhost","root","19940306","siyapatha");
if(isset($_POST['submit'])){
if(isset($_POST['fname'])){
	$cid   = $_POST['cid'];
	$fname = $_POST['fname'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];


	if(mysqli_connect_errno()){
		die('SORRY BRO! Connection to the Database has failed' . mysqli_connect_error());
	}

	$sql = "INSERT INTO customer(cid,fname, gender, address, email, phone) VALUES
	('$cid','$fname','$gender','$address','$email','$phone')";

	$result = mysqli_query($connection, $sql);

	if($result){
		echo "<script type='text/javascript'> alert('submitted successfully!')</script>";
	}
	else{
		echo "<script type='text/javascript'>alert('failed!')</script>";
	}
}

}
mysqli_close($connection);
?>

<!DOCTYPE html>
<html>
<head>
	<title>siyapatha company</title>
	<link rel="stylesheet" type="text/css" href="css/navmenu10.css">
</head>
<body>
<div class="container">
	<a href="index.php" class="active">HOME</a>
	<div class="dropdown">
		<button class="dropbtn">ADD</button>
		<div class="dropdown-content">
			<a href="addcustomer.php">CUSTOMER</a>
			<a href="addorder.php">ITEM</a>
			<a href="additem.php">ORDER</a>
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
	<form method="POST" action="addcustomer.php">
		<label for="cid">cid___:</label>
		<input type="text" name="cid"/><br><br>

		<label for="fname">fname    :</label>
		<input type="text" name="fname"/><br><br>
		
		<label for="gender">gender    :</label>
		<select name="gender">
			<option value="male">MALE</option>
			<option value="female">FEMALE</option>
		</select><br><br>
		
		<label for="address">address:</label>
		<input type="text" name="address"><br><br>

		<label for="email">e-mail   :</label>
		<input type="email" name="email"><br><br>

		<label for="phone">phone   :</label>
		<input type="text" name="phone" size="10" pattern="[0-9]{10}">

		<p>
			<input type="submit" name="submit" value="ADD"/>
			<input type="reset" name="reset" value="CLEAR">	
		</p>

	</form>
</div>


</body>
</html>
