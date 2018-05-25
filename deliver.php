<!DOCTYPE html>
<html>
	<head>
		<title>delivers</title>
	</head>
	<body>
		<h3 align="center">DELIVER STATUS</h3>
		<a href="http://localhost/siyapatha/index.php">HOME</a>
		<form action="deliver.php" method="post">
			<label for="orders">ORDERS__</label>
				<select name="orders">
					<option value ="all">ALL</option>
					<option value="undelivered">UN DELIVERED</option>
					<option value="delivered">DELIVERED</option>
				</select>
				<input type="submit" name="submit1" value="SEARCH"><br>

			<label for="order_id">ORDER ID</label>
			<input type="text" name="order_id">
			<input type="submit" name="submit2" value="SEARCH"><br>
		</form>
		<h3 align="center">THIS IS THE RESULTS</h3><br><br>

<?php
$connection = mysqli_connect("localhost","root","","siyapatha");
if(isset($_POST['submit1'])){
	$query = "";
	$key = $_POST['orders'];
	
	if($key=="all"){
		
		$query = "SELECT*FROM orders";
	}
	else{
		$query = "SELECT*FROM orders WHERE status = '$key'";
	}
	$result = mysqli_query($connection, $query);
	while($search_row = mysqli_fetch_array($result)){
		echo "ITEM ID------------------>: ".$search_row['item_id']."<br>";
		echo "CLIENT ID--------------->: ".$search_row['client_id']."<br>";
		echo "QUENTITY--------------->: ".$search_row['quentity']."<br>";
		echo "DATE OF ISSUE--------->: ".$search_row['date_of_issue']."<br>";
		echo "DATE OF DELIVERD-->: ".$search_row['date_of_delivered']."<br>";
		echo "STATUS------------------->: ".$search_row['status']."<br><br>";
	}
	
}
if(isset($_POST['submit2'])){
	$key1 = $_POST['order_id'];
	$query1 = "SELECT*FROM orders WHERE item_id = '$key1'";
	$result1 = mysqli_query($connection, $query1);
	$rows = mysqli_fetch_assoc($result1);

	echo "THE ITEM ID--------------->".$rows['item_id']."<br>";
	echo "THE CLIENT ID------------>".$rows['client_id']."<br>";
	echo "QUENTITY------------------>".$rows['quentity']."<br>";
	echo "DATE OF ISSUED--------->".$rows['date_of_issue']."<br>";
	echo "DATE OF DELIVERED--->".$rows['date_of_delivered']."<br>";
	echo "STATUS---------------------->".$rows['status']."<br>";
}
?>

		<div>
			<form  action="deliver.php" method="post">
				<label for="delete order">DELETE ORDER</label>
				<input type="text" name="delete_order">
				<input type="submit" name="delete" value="DELETE">
			</form>
		</div>
	</body>
</html>

<?php
if(isset($_POST['delete'])){

	$id = $_POST['delete_order'];
	$query1 = "DELETE FROM orders WHERE  item_id = '$id'";
	$run = mysqli_query($connection, $query1);
}
mysqli_close($connection);
?>

