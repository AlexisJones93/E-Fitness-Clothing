<?php
session_start();


if(isset($_POST['login'])){
   include('Connect.php');
	$error = "";

	
		

	if(empty($_POST['email']) || empty($_POST['pwd'])){
	
	   $error = "Please fill out both fields";
	}
	else{

	  $password =mysqli_real_escape_string($conn,filter_var(strip_tags($_POST['pwd']),FILTER_SANITIZE_STRIPPED));
	  $email =mysqli_real_escape_string($conn,filter_var(strip_tags($_POST['email']),FILTER_SANITIZE_STRIPPED));
	  
	
	  $sql = "SElECT * FROM user WHERE email = '$email'";
	  $result = mysqli_query($conn,$sql);
	  $rows =mysqli_fetch_array($result);

	  if($rows){
	  	  $hash = $rows['password'];
		  
		  
		  if(password_verify($password, $hash)){
			  $_SESSION['user'] = $email;
		      header("Location:User_account.php");


		  }
		  else{
		  	  $Error ="Password or email address are incorrect";
		  }
		  
	  }
	  
	 }
}

?>