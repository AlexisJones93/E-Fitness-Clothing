<?php 
session_start();
include('Connect.php');

$user = $_SESSION['user'];
$error="";


$sql = "SELECT * FROM user WHERE email = '$user'";
$result = mysqli_query($conn,$sql);

$rows = mysqli_fetch_assoc($result);

$id = $rows['userID'];


if(isset($_POST['update'])){
	
		if(empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['contactnumber']) || empty($_POST['addressfirst']) || empty($_POST['city']) || empty($_POST['county']) || empty($_POST['postcode'])){
			
			
			$error="Please fill in all fields";
		}
		
		else{
		
			$firstname = mysqli_real_escape_string($conn,filter_var(strip_tags($_POST['firstname']),FILTER_SANITIZE_STRIPPED));
			$lastname = mysqli_real_escape_string($conn,filter_var(strip_tags($_POST['lastname']),FILTER_SANITIZE_STRIPPED));
			$contactnumber = mysqli_real_escape_string($conn,filter_var(strip_tags($_POST['contactnumber']),FILTER_SANITIZE_STRIPPED));
			$address_firstline = mysqli_real_escape_string($conn,filter_var(strip_tags($_POST['addressfirst']),FILTER_SANITIZE_STRIPPED));
			$address_secondline = mysqli_real_escape_string($conn,filter_var(strip_tags($_POST['addresssecond']),FILTER_SANITIZE_STRIPPED));
			$city = mysqli_real_escape_string($conn,filter_var(strip_tags($_POST['city']),FILTER_SANITIZE_STRIPPED));
			$county = mysqli_real_escape_string($conn,filter_var(strip_tags($_POST['county']),FILTER_SANITIZE_STRIPPED));
			$postcode = mysqli_real_escape_string($conn,filter_var(strip_tags($_POST['postcode']),FILTER_SANITIZE_STRIPPED));
			
			
			$sql ="INSERT INTO addresses (userID,address_firstline,address_secondline,postcode,city,county, firstname, lastname, contactnumber) VALUES ('$id','$address_firstline','$address_secondline','$postcode','$city','$county','$firstname','$lastname',$contactnumber)";
			$result = mysqli_query($conn,$sql)or trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error($conn), E_USER_ERROR);

			}
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
			<a href="Addresses.php">My Address Book</a><br>
			<a href="">Payment Methods</a><br>
			<a href="">Sign Out</a>
		</div>


		<div class="flex_container">
			<form action="" method="POST">
			<span class="warning"><?php if(isset($error)){echo $error;}?></span><br><br>
				<div class="form-group">
					<label>Your Addresses</label><br>
				</div>
				<div class="form-group">
					<label>First Name:</label><br>
					<input type="text" class="form-control" name="firstname">
				</div>
				<div class="form-group">
					<label>Last Name:</label><br>
					<input type="text" class="form-control" name="lastname">
				</div>
				<div class ="form-group">
					<label>Contact Number:</label><br>
					<input type="number" class="form-control" name="contactnumber">
				</div>
				<div class ="form-group">
					<label>First Line of Address:</label><br>
					<input type="text" class="form-control" name="addressfirst">
				</div>
				<div class ="form-group">
					<label>Second Line of Address:</label><br>
					<input type="text" class="form-control" name="addresssecond">
				</div>
				<div class ="form-group">
					<label>City:</label><br>
					<input type="text" class="form-control" name="city">
				</div>
				<div class ="form-group">
					<label>County:</label><br>
					<input type="text" class="form-control" name="county">
				</div>
				<div class ="form-group">
					<label>Postcode:</label><br>
					<input type="text" class="form-control" name="postcode">
				</div>
				 <button type="submit" class="btn btn-primary" name="update">Update</button><br><br>
			</form>
		</div>
	</div>

    <footer></footer>
</body>
</html>