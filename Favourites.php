<?php   
session_start();
include('connect.php');

//if the unfavourite button is pressed
if(isset($_POST['unfav'])){
// The for each item in the cart seperated to array key and value in array key.
	foreach($_SESSION['favourite'] as $key => $value){
	//if the value in the key equals the id that is in the post
		if($value['id'] == $_POST['id']){
		//Delete from the array based on the key
			unset($_SESSION['favourite'][$key]);
			//display message of removal.
			echo"<script> alert('product removed')</script>";
			//send back to the favourites page.
		   echo"<script>window.location=Favourites.php</script>";
		}
	}
}

	

?>


<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta charset="utf-8" />
  <link rel="stylesheet" href="StyleSheet1.css" /> 
    <title>E-Fitness Clothing</title>
    
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>

    
  <?php  include('Header.html');  ?>
  <div class="wrapper">
  <?php
  if(isset($_SESSION['favourite'])){
  
	$item_array_id = array_column($_SESSION['favourite'],'id');
	
    $sql = "SELECT * FROM product";
	$fav = mysqli_query($conn,$sql);
	
   while ($row = mysqli_fetch_assoc($fav)){
	 foreach($item_array_id as $id){
			if($row['productID'] == $id){
  
		
	?>
	
	   
		 <form action="" method="post">
			<div class="flex_container">
			 <div class="productimage"></div>
			<div class="productinfo"><?php echo $row['productname'];?><br>
			<input  type="hidden" name="id" value= "<?php echo $row['productID'];?>"</input>
			<button class="unfav" name="unfav"><i class="far fa-heart"></i></button>
			<button name="add" >Add to cart</button></div>
			</div>
		 </form>
		
	
	<?php

  }
  
	}
		}
		}
		 else{
 echo"<h7>No saved items</h7>";
 }
						
	?>
	
	</div>
    <footer>

        <p>Contact us</p>
    </footer>


</body>
</html>