<?php 
session_start();
include('Connect.php');

$user = $_SESSION['user'];
$Error="";

$sql = "SELECT * FROM user WHERE email = '$user'";
$result = mysqli_query($conn,$sql);

	$rows = mysqli_fetch_assoc($result);

	
	if(isset($_POST['save'])){

		if(empty($_POST['oldpassword']) || empty($_POST['newpassword']) || empty($_POST['confirmpassword'])){

			$Error="Please fill in all fields";
		}
		else{
			$oldpassword = mysqli_real_escape_string($conn,filter_var(strip_tags($_POST['oldpassword']),FILTER_SANITIZE_STRIPPED));
			$newpassword = mysqli_real_escape_string($conn,filter_var(strip_tags($_POST['newpassword']),FILTER_SANITIZE_STRIPPED));
			$confirmpassword = mysqli_real_escape_string($conn,filter_var(strip_tags($_POST['confirmpassword']),FILTER_SANITIZE_STRIPPED));

			if($rows)
			{
	  			$hash = $rows['password'];
		  
		  
				if(password_verify($oldpassword, $hash))
				{
					if($confirmpassword == $newpassword){
						$hashed_password = password_hash($newpassword,PASSWORD_DEFAULT);

						$newPassword = "UPDATE user SET password='$hashed_password' WHERE email = '$user'";
						$result = mysqli_query($conn,$newPassword)or trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error($conn), E_USER_ERROR);
						header("Location:Addresses.php");
					}
					else{
						$Error ="Please match confirmed password with the new password";
					}
				}
				else{
				  $Error ="Old password does not match current password";
				}
			}
			 
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
				<div class="form-group">
				<span class="warning"><?php if(isset($Error)){echo $Error;}?></span>
				<label>Register with email afjahfjahfaksfhakhfkajfhaskhflFsaashkfffffffffffffffffffff</label><br>
					<label>Current Password:</label>
					 <input type="password" class="form-control" name="oldpassword">
				</div>
				<div class="form-group">
					<label for="newpassword">New Password:</label>
					<input type="password" class="form-control" name="newpassword">
				</div>
				<div class="form-group">
					<label for="confirmpassword">Confirm Password:</label>
					<input type="password" class="form-control" name="confirmpassword">
				</div>
				 <button type="submit" class="btn btn-primary" name="save">Save Password</button><br><br>
		</div>
	</div>




    <footer></footer>
</body>
</html>