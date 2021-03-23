
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="StyleSheet1.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>E-Fitness Clothing</title>
	 
</head>
<body>

<?php include('Header.html') ?>
<?php include('LoginCheck.php')?>

<div class="loginwrapper">
<div class="container p-3 my-3">

	<form action="" method="POST">
	 <div class="form-group">
	 <span class="warning"><?php if(isset($error)){echo $error;}?></span><br><br>
	 <label>Sign in with email</label><br>
	 <label for="email">Email Address:</label>
	 <input type="email" class="form-control" placeholder="" name="email">
	 </div>
	 <div class="form-group">
	 <label for="pwd">Password:</label>
	 <input type="password" class="form-control" placeholder="" name="pwd">
	 </div>
	 <button type="submit" class="btn btn-primary" name="login">Login</button><br><br>
	 <a href="">Forgotten Password?</a>
	 <a href="Register.php">New here?</a>
	</form>
	</div>

	</div>
</body>
<footer>

        <p>Contact us</p>
    </footer>
</html>