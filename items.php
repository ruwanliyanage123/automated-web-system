<!DOCTYPE html>
<html>
<head>
	<title>items</title>
</head>
<body>

<a href="http://localhost/siyapatha/index.php">HOME</a><br>
<div class="container">
	
	<form action="items.php" method="post">
		<label for="item_id">ITEM ID_____</label>
		<input type="text" name="item_id">
		<input type="submit" name="search" value="SEARCH"><br>
		<input type="submit" name="all" value="ALL"><br><br>
	</form>
	<h3 align="center">THIS IS YOUR ITEMS</h3>
</div>

<?php
$connection = mysqli_connect("localhost","root","19940306","siyapatha");
	
	$query ="";
	if(isset($_POST['search'])){

		$id = $_POST['item_id'];
		$query = "SELECT*FROM items WHERE $id= id";
		$result = mysqli_query($connection,$query);
		$row = mysqli_fetch_assoc($result);
		if($row["id"]==null){
			echo "_________________SORRY YOU HAVE ENTERD A INVALID ID IN THIS CASE";
		}
		else{
			echo $row["id"]."<br>";
			echo $row["item_name"]."<br>";
			echo $row["item_type"]."<br>";
			echo $row["item_price"]."<br>";
		}
		
	}

	if(isset($_POST['all'])){
		$query = "SELECT*FROM items";
	
		$run = mysqli_query($connection,$query);
		while($search_row =mysqli_fetch_array($run)){
			echo"<br>";
			echo "YOUR ID NUMBER  :  ". $search_row['id']."<br>";
			echo "YOUR FIRST NAME  :  ". $search_row['item_name']."<br>";
			echo "YOUR LAST NAME   :  ". $search_row['item_type']."<br>";
			echo "YOUR ADDRESS     __  :  ". $search_row['item_price']."<br>";
		}
	}




	//echo "hello mavel";
/*
	$connection = mysqli_connect("localhost","root","","siyapatha");

	$query = "";
	if(isset($_POST['search'])){
		$id = $_POST['item_id'];
		$query = "SELECT*FROM items WHERE $id = id";
		$run1 = mysqli_query($connection,$query);
		$result1 = mysqli_fetch_array($run1);
		echo "ITEM ID____:".$result1['id']."<br>";
		echo "ITEM NAME  :".$result1['item_name']."<br>";
		echo "ITEM TYPE_ :".$result1['item_type']."<br>";
		echo "ITEM PRICE :".$result1['item_price']."<br>";
	}
	
	if(isset($_POST['all'])){
		$query = "SELECT*FROM items";

	$run = mysqli_query($connection,$query);
	while($result = mysqli_fetch_array($run)){
		echo "ITEM ID____:".$result['id']."<br>";
		echo "ITEM NAME  :".$result['item_name']."<br>";
		echo "ITEM TYPE_ :".$result['item_type']."<br>";
		echo "ITEM PRICE :".$result['item_price']."<br>";
	}
}
*/?>

<div class="delete">
	<h3 align="center">DELETING ITEMS</h3><br><br>
	<form action="items.php" method="post">
		<label for="Item_id">EXIT ITEM ID</label>
		<input type="text" name="Item_id">
		<input type="submit" name="delete" value="DELETE">
	</form>
	

</div>

</body>
</html>


<?php
if(isset($_POST['delete'])){
	$id1 = $_POST['Item_id'];
	$query1 = "DELETE FROM items WHERE id = '$id1'";
	$result1 = mysqli_query($connection,$query1);
	
}
mysqli_close($connection);
/*
$query ="";
	if(isset($_POST['search'])){
		$id = $_POST['item_id'];
		$query = "SELECT*FROM items WHERE $id= id";
		$result = mysqli_query($connection,$query);
		$row = mysqli_fetch_assoc($result);
		if($row["id"]==null){
			echo "_________________SORRY YOU HAVE ENTERD A INVALID ID IN THIS CASE";
		}
		else{
			echo $row["id"]."<br>";
			echo $row["item_name"]."<br>";
			echo $row["item_type"]."<br>";
			echo $row["item_price"]."<br>";
		}
		
	}

*/


?>
