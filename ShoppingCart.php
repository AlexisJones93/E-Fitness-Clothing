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

	<?php
	
	if(isset($_SESSION['cart'])){
  
	$item_array_id = array_column($_SESSION['cart'],'id');
	print_r($item_array_id);
    $sql = "SELECT * FROM product";
	$fav = mysqli_query($conn,$sql);
		
	while ($row = mysqli_fetch_assoc($fav)){
	 foreach($item_array_id as $id){
			if($row['productID'] == $id){
			
	?>
	
	   <div class="flex_row">
		 <form action="" method="post">
			<div class="flex_container">
			 <div class="productimage">1</div>
			<div class="productinfo"><?php echo $row['productname'];?>
			<input  type="hidden" name="id" value= "<?php echo $row['productID'];?>"</input>
			<button name="remove">Remove</button>
			<button name="add">Add to cart</button></div>
			</div>
		 </form>
		</div>
	
	<?php

  }
  
	}
		}
			
			}
			else {
	            echo"You have no items in your basket ";
             }

			 ?>
	
	
    <footer>

        <p>Contact us</p>
    </footer>


</body>
</html>