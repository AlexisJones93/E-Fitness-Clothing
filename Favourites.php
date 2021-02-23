<?php   
session_start();
include('connect.php');



if(isset($_SESSION['cart']))
{
	

	//foreach($_SESSION['cart'] as $result){

		//foreach ($result as $key => $value) 
		//{
			//echo $key."-".$value."<br />";
		//}
		
		
	//}
}
//else{
   
//}
 
	
		

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

  <?php
	if(isset($_SESSION['cart'])){
  
	$item_array_id = array_column($_SESSION['cart'],'id');
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
			<button name="add" >Add to cart</button></div>
			</div>
		 </form>
		</div>
	
	<?php

  }
  
	}
		}
			}
			else {
	            echo"You have no saved items";
             }

		
	
	?>
	
	
    <footer>

        <p>Contact us</p>
    </footer>


</body>
</html>