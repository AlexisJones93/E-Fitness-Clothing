<?PHP
session_start();
include('connect.php');

if(isset($_POST['remove'])){
  
   foreach($_SESSION['cart'] as $key =>$value){
   	   if($value['id'] == $_POST['id']){
	   	   unset($_SESSION['cart'][$key]);
		   echo"<script> alert('product removed')</script>";
		   echo"<script>window.location=ShoppingCart.php</script>";
	   }
   }
  
}

?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="StyleSheet1.css" />
    <title>E-Fitness Clothing</title>
   
</head>
<body>

    <?php include('Header.html');?>
	<div><p>My Bag</p></div>

	<div class="flex-grid">
  <div class="col">This little piggy went to market.</div>
  <div class="col">This little piggy stayed home.</div>
  <div class="col">This little piggy had roast beef.</div>
</div>
<div class="flex-grid">
  <div class="col">This little piggy went to market.</div>
  <div class="col">This little piggy stayed home.</div>
  <div class="col">This little piggy had roast beef.</div>
</div>
</body>
</html>