<?php


if(isset($_POST['newuser'])){
	include('Connect.php');

	$error="";
	$interest="";
	

	$date = $_POST['date'];
	$month = $_POST['month'];
	$year =$_POST['year'];

	$dob = $date."/".$month."/".$year;
	


	if(empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['email']) || empty($_POST['pwd'])){
		$error="Please fill in all fields";
	}
	

	$firstname=mysqli_real_escape_string($conn,filter_var(strip_tags($_POST['firstname']),FILTER_SANITIZE_STRIPPED));
	$lastname=mysqli_real_escape_string($conn,filter_var(strip_tags($_POST['lastname']),FILTER_SANITIZE_STRIPPED));
	$email=mysqli_real_escape_string($conn,filter_var(strip_tags($_POST['email']),FILTER_SANITIZE_STRIPPED));
	$password=mysqli_real_escape_string($conn,filter_var(strip_tags($_POST['pwd']),FILTER_SANITIZE_STRIPPED));
	$confirm_password=mysqli_real_escape_string($conn,filter_var(strip_tags($_POST['confirmpassword']),FILTER_SANITIZE_STRIPPED));
	$preference =mysqli_real_escape_string($conn,filter_var(strip_tags($_POST['radio']),FILTER_SANITIZE_STRIPPED));

	if($password==$confirm_password){
		$hashed_password = password_hash($password,PASSWORD_DEFAULT);
	}
	else{
		$error = "Password does not match";
	}

	if($preference == "workout"){
		$interest='workout';
	}
	else{
		$interest='running';
		
	}

	

	$search = "SELECT * FROM user WHERE email = '$email'";
	$result = mysqli_query($conn, $search);

	if(mysqli_num_rows($result)>0){
		$error = "Email address is already registered";
	}

	if(empty($error)){
		$sql="INSERT INTO user(firstName, lastName, email,password,dob,preference) VALUES('$firstname','$lastname','$email','$hashed_password','$dob','$interest')";
		$result = mysqli_query($conn,$sql);
	}	

}

?>