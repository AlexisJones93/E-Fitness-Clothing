<?php 
session_start();
include('Connect.php');

$user = $_SESSION['user'];


$sql = "SELECT * FROM addresses LEFT JOIN user on addresses.userID = user.userID WHERE user.email = '$user'";
$result = mysqli_query($conn,$sql);

if(isset($_POST['delete'])){
	$delete = "DELETE FROM addresses WHERE addressID = '$_POST[addressID]'";
	$deletedaddress = mysqli_query($conn,$delete) or trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error($conn), E_USER_ERROR);
	header("Refresh:0");
}


	
	

?>


<!DOCTYPE HTML>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="StyleSheet1.css" />
    <title>E-Fitness Clothing</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
   <div class="flex_row">
		<div class="sidenav">
			<p>Welcome to your account</p>
			<a href="details.php">My Details</a><br>
			<a href="">My Orders</a><br>
			<a href="">Change Password</a><br>
			<a href="">My Address Book</a><br>
			<a href="">Payment Methods</a><br>
			<a href="">Sign Out</a>
		</div>
		<div class="flex_container">
			<form action="" method="POST">
				<div class="form-group">
				<label>Address Book</label><br>
				<button class="btn btn-primary"><a href="newaddress.php" style ="color:black;">ADD NEW ADDRESS</a></button><br>
				</div>
			</form>	
		
	<?php 
	while ($rows = mysqli_fetch_array($result)){
	
	?>
				<form action-"" method="POST">
				<div class="form-group">
				<output><?php echo $rows['firstname']. '  ' .$rows['lastname'];?></output><br>
				<output><?php echo $rows['address_firstline'];?></output><br>
				<input name="addressID" value="<?php echo $rows['addressID'];?>"></input>
				<output><?php echo $rows['address_secondline'];?></output><br>
				<output><?php echo $rows['postcode'];?></output><br>
				<output><?php echo $rows['city'];?></output><br>
				<output><?php echo $rows['county'];?></output><br>
				<button name="delete">Delete</button>
				<button name="edit"><?php echo"<a href=\"editaddress.php?id=$rows[addressID]\">Edit</a>"?></button>
				</div>
				</form>

				<?php
	}
	
	?>
		</div>	
				 
		</div>
	</div>




    
</body>
</html>