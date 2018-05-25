
<!DOCTYPE html>
<html>
<head>
	<title>customer</title>
</head>
<body>
	<h1 align="center">CUSTOMER</h1>

	<a href="http://localhost/siyapatha/index.php">HOME</a>

	<div class="search">
		<form action="customer.php" method="post">
			<label for="id_number">ID NUMBER...........</label>
			<input type="text" name="id_number">
			<input type="submit" name="submit" value="SEARCH"><br>
			<label for="gender">GENDER.................</label>
			<select name="gender">
				<option value="male">MALE</option>
				<option value="female">FEMALE</option>
			</select>
			<input type="submit" name="submit3" value="SEARCH"><br>
			<label type="text">ALL CUSTOMERS</label>
			<input type="submit" name="all" value="ALL">
			<input type="reset" name="reset" value="RESET">
		</form>
		<h2 align="center">THIS IS YOUR DETALS</h2>
	</div>

<?php
	$connection = mysqli_connect("localhost","root","19940306","siyapatha");

	$query ="";
	if(isset($_POST['submit'])){
		$id_number = $_POST['id_number'];
		echo $id_number;
		$query = "SELECT*FROM customer WHERE cid = '$id_number'";
		$run1 = mysqli_query($connection, $query);
		$search_row1 = mysqli_fetch_assoc($run1);

		echo "YOUR ID NUMBER-->:  ". $search_row1['cid']."<br>";
		echo "YOUR FIRST NAME------>:  ". $search_row1['fname']."<br>";
		echo "YOUR GENDER------------>:  ". $search_row1['gender']."<br>";
		echo "YOUR ADDRESS---------->:  ". $search_row1['address']."<br>";
		echo "YOUR EMAIL-------------->:  ". $search_row1['email']."<br>";
		echo "YOUR PHONE-------------->:  ". $search_row1['phone']."<br>";

	}
	if(isset($_POST['all'])){
		$query = "SELECT*FROM customer";
	
		$run = mysqli_query($connection,$query);
		while($search_row =mysqli_fetch_array($run)){
			echo"<br>";
			echo "YOUR ID NUMBER------->:  ". $search_row['cid']."<br>";
			echo "YOUR FIRST NAME------>:  ". $search_row['fname']."<br>";
			echo "YOUR GENDER----------->:  ". $search_row['gender']."<br>";
			echo "YOUR ADDRESS---------->:  ". $search_row['address']."<br>";
			echo "YOUR EMAIL-------------->:  ". $search_row['email']."<br>";
			echo "YOUR PHONE------------->:  ". $search_row['phone']."<br>";
		}
	}
	
	if(isset($_POST['submit3'])){

		$gender = $_POST['gender'];
		
		$query3 = "SELECT*FROM customer WHERE gender = '$gender'";
		$mail_count = 0;
		$run3 = mysqli_query($connection,$query3);
		while($search_row2 =mysqli_fetch_array($run3)){
			$mail_count +=1;
			echo"<br>";
			echo "YOUR ID NUMBER------->:  ". $search_row2['cid']."<br>";
			echo "YOUR FIRST NAME------>:  ". $search_row2['fname']."<br>";
			echo "YOUR GENDER----------->:  ". $search_row2['gender']."<br>";
			echo "YOUR ADDRESS---------->:  ". $search_row2['address']."<br>";
			echo "YOUR EMAIL-------------->:  ". $search_row2['email']."<br>";
			echo "YOUR PHONE------------->:  ". $search_row2['phone']."<br><br><br>";
		}

		echo "-------------------------------------------------------------------------------THE TOTAL COUNT OF ".$gender." ARE ".$mail_count."----------------------------------------------------------------------------------------------------";
		
	}

?>


	
	<div class="delete">
		<h3 align="center">DELETE THE CUSTOMERS</h3>
		<form action="customer.php" method="post">
			<label for="exit_member">EXIT MEMBER</label>
			<input type="text" name="exit_member">
			<input type="submit" name="delete" value="DELETE">
		</form>
	</div>
</body>

</html>

<?php

if(isset($_POST['delete'])){
	$exit_member = $_POST['exit_member'];
	$quer = "DELETE FROM customer WHERE cid = '$exit_member'";
	$runn = mysqli_query($connection, $quer);
}
mysqli_close($connection);
?>

