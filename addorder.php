<?php
$connection = mysqli_connect("localhost","root","","siyapatha");
if(isset($_POST['submit'])){
if(isset($_POST['item_id'])){
	
	$item_id 	   = $_POST['item_id'];
	$client_id 	   = $_POST['client_id'];
	$quantity  	   = $_POST['quantity'];
	$date_of_issue = $_POST['date_of_issue'];
	$date_of_deliver = $_POST['date_of_deliver'];
	$status = $_POST['status'];

	$query = "INSERT INTO orders(item_id,client_id, quentity, date_of_issue,date_of_delivered,status)
	VALUES('$item_id','$client_id','$quantity','$date_of_issue','$date_of_deliver','$status')";

	$result = mysqli_query($connection, $query);

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

<!DOCTYPE html>
<html>
<head>
	<title>add order</title>
</head>
<body>



<div class="container">
	<a href="http://localhost/siyapatha/index.php">HOME</a>
	<div class="dropdown">
		<button class="dropbtn">ADD</button>
		<div class="dropdown-content">
			<a href="addcustomer.php">CUSTOMER</a>
			<a href="additem.php">ITEM</a>
			<a href="addorder.php">ORDERE</a>
		</div>
		<div>
			<a href="siyapatha/addrecord.php">ITEMS</a>
			<a href="siyapatha/additem.php">CUSTOMERS</a>
			<a href="siyapatha/addorder.php">UPDATE</a>
			<a href="siyapatha/adduser.php">BRANCH</a>
		</div>

		<div class="box">
			<h1 align="center">	ADD ORDER</h1>
			<form action="addorder.php" method="post">
				<label for="item_id">ITEM ID__________</label>
				<input type="text" name="item_id"><br>
				<label for="client_id">CLIENT ID________</label>
				<input type="text" name="client_id"><br>
				<label for="quantity">QUANTITY_______</label>
				<input type="number" name="quantity" size="6"><br>
				<label for="date_of_issue">DATE OF ISSUE___</label>
				<input type="date" name="date_of_issue" min="2018-05-17"><br>
				<label for="date_of_deliver">DATE OF DELIVER</label>
				<input type="date" name="date_of_deliver" min="2018-05-17"><br>
				<label for="status">STATUS__________</label>

				<select name="status">
					<option value="delivered">DELIVERED</option>
					<option value="undelivered">UN DELIVERED</option>
				</select><br>
				<input type="submit" name="submit" value="ADD">
				<input type="reset" name="reset" value="CLEAR">
			</form>

		</div>

	</div>
</div>



</body>
</html>