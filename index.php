<?php echo "hello lakindu"?>
<?php
session_start();
//echo $_SESSION['login_user'];
if (!isset($_SESSION['login_user'])){
	
	header("location: login/index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>siyapatha with</title>
	<link rel="stylesheet"  href="css/navmenu1.css">
	<link rel="shortcut icon " type="image/x-icon" href="image/two.jpg">
</head>
<body>

	
	<div id = "header">
		<h1 align="center"></h1>
	</div>

	<div id = "navbar">
		
	<div class="container">
		<a href="index.php">HOME</a>
		<div class="dropdown">
	    	<button class="dropbtn">ADD</button>
	    	<div class="dropdown-content">
		      <a href="addcustomer.php">CUSTOMER</a>
		      <a href="additem.php">ITEM</a>
		      <a href="addorder.php">ORDER</a>
			  <a href="adduser.php">USER</a>
		    </div>
	  	</div>
	  	<div >
		<a href="items.php">ITEM</a>
		<a href="customer.php">CUSTOMERS</a>
		<a href="deliver.php">DELIVER</a>
		<a href="updateqty.php">UPDATE</a>
		<a href="branch.php">BRANCH</a>
		</div>
	</div>

	</div>
	<div id = "sidebar">
		<a href="www.youtube.com">
 			 <img src="images/youtube.png" style="width:80px;height:80px;border:0; margin-top: 120px; margin-left: 85px;">
		</a>

		<a href="wwww.facebook.com">
			<img src="images/facebook.png" style="width:190px; height:110px; border:0; margin-top:0px;margin-left: 30px">
		</a>
		<a href="wwww.twitttr.com">
			<img src="images/twitter.png" style="width:75px; height:75px; border:0; margin-top:0px;margin-left: 90px;">
		</a>
	</div>


	<div id = "content">
		<iframe width="750" height="440"
			src="images/finall.mp4">
		</iframe>
	</div>






	
</body>
</html>
