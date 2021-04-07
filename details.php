<?php 
session_start();
include('Connect.php');

$user = $_SESSION['user'];
$prefrunning="";
$prefworkout="";
$error="";

$sql = "SELECT * FROM user WHERE email = '$user'";
$result = mysqli_query($conn,$sql);

$rows = mysqli_fetch_assoc($result);

if($rows['preference']== 'workout'){
	$prefworkout = 'checked';
}
else{
	$prefrunning='checked';
}

if(isset($_POST['update'])){

	if(empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['email'])){
			$error="Please fill in all fields";
	}
	else{
		$firstname=mysqli_real_escape_string($conn,filter_var(strip_tags($_POST['firstname']),FILTER_SANITIZE_STRIPPED));
		$lastname=mysqli_real_escape_string($conn,filter_var(strip_tags($_POST['lastname']),FILTER_SANITIZE_STRIPPED));
		$email=mysqli_real_escape_string($conn,filter_var(strip_tags($_POST['email']),FILTER_SANITIZE_STRIPPED));
		$dob =mysqli_real_escape_string($conn,filter_var(strip_tags($_POST['dob']),FILTER_SANITIZE_STRIPPED));
		$preference =mysqli_real_escape_string($conn,filter_var(strip_tags($_POST['radio']),FILTER_SANITIZE_STRIPPED));

		$sql = "UPDATE user set firstName = '$firstname', lastName = '$lastname', email = '$email', preference = '$preference', dob = '$dob' where email = '$email'";
		$result = mysqli_query($conn,$sql);
		header("Location:details.php");
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
			<p>Welcome to your account </p>
			<a href="details.php">My Details</a><br>
			<a href="">My Orders</a><br>
			<a href="changepassword.php">Change Password</a><br>
			<a href="Addresses.php">My Address Book</a><br>
			<a href="">Payment Methods</a><br>
			<a href="">Sign Out</a>
		</div>
		<div class="flex_container">
			<form action="" method="POST">
				<div class="form-group">
					<label>Register with email afjahfjahfaksfhakhfkajfhaskhflFsaashkfffffffffffffffffffff</label><br>
					<label>First name:</label>
					<input type="text" class="form-control" value="<?php echo $rows['firstName'];?>" name="firstname">
				</div>
				<div class="form-group">
					<label>Last name:</label>
					 <input type="text" class="form-control" value="<?php echo $rows['lastName'];?>" name="lastname">
				</div>
				<div class="form-group">
					<label for="email">Email:</label>
					<input type="email" class="form-control" value="<?php echo $rows['email'];?>" name="email">
				</div>
				 <div class="form-group">
					<label for="email">Birthday:</label>
					<input type="text" class="form-control" value="<?php echo $rows['dob'];?>" name="dob">
				</div>
				  <div class="form-group">
					<label for="Interest">Mostly Interested In:</label><br>
					<input type="radio" name="radio" value="workout" <?php echo $prefworkout;?>>
					<label for="workout">Workout</label>
					<input type="radio" name="radio"value="running" <?php echo $prefrunning;?> >
					<label for="running">Running</label>
				 </div>
				 <button type="submit" class="btn btn-primary" name="update">Update</button><br><br>
		</div>
	</div>




    <footer></footer>
</body>
</html>