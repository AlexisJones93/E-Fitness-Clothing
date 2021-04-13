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

$sql = "SELECT * FROM addresses where deault = '1'";
$result = mysqli_query($conn, $sql);

$default = mysqli_fetch_assoc($result);


?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="StyleSheet1.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>E-Fitness Clothing</title>
   
</head>
<body>

    <?php include('Header.html');?>
	
	<div class ="items" style="background-color:pink;"><p>My Bag</p></div>
	<div class="flex-grid" style="background-color:black;">
	<div class="price" style="background-color:yellow;">
		<form>
			<h3> Delivery Adress</h3>
			<hr>
			<input  name="firstname" value= "<?php echo $default['firstname'];?>"</input>
			<input  name="lastname" value= "<?php echo $default['lastname'];?>"</input>
			<output  name="firstline" value= "<?php echo $row['product_detail_ID']; ?>"</input>



			<input  name="secondline" value= "<?php echo $row['product_detail_ID'];?>"</input>
			<input  name="city" value= "<?php echo $row['product_detail_ID'];?>"</input>
			<input  name="county" value= "<?php echo $row['product_detail_ID'];?>"</input>
			<input  name="postcode" value= "<?php echo $row['product_detail_ID'];?>"</input>
			<input  name="county" value= "<?php echo $row['product_detail_ID'];?>"</input>
			<hr>
			<button class="button" name="checkout"><span>CHECKOUT</span></button>
		</form>
  </div>

	<div class ="items" style="background-color:pink;">
	<h3> SUMMARY </h3>
			<?php
			  $total = 0;
				if(isset($_SESSION['cart'])){
		
					//$item_array_id = array_column($_SESSION['cart'],'id');
					$item_array_productid = array_column ($_SESSION['cart'], 'productid');

					$sql = "SELECT * FROM product_details Left JOIN product on product_details.productID = product.productID";
					$fav = mysqli_query($conn,$sql);

					while ($row = mysqli_fetch_assoc($fav)){
						foreach($item_array_productid as $id){
							if($row['product_detail_ID'] == $id ){
										$total = $total + (int)$row['price'];
			
			?>
	
	  
								 <form action="" method="post">
									
									 <div class="productimage">1</div>
									 <div class="productinfo"><?php echo "&pound" .$row['price'];?>
									 <?php echo $row['productname'];?> <br></div>
									 <input  type="hidden" name="id" value= "<?php echo $row['product_detail_ID'];?>"</input>	
									 <hr>
								 </form>
						 
			<?php
											}
										}
									}
			
					}
					else 
					{
						echo"You have no items in your basket ";
					}

		

			?>
			<h5> Sub-Total:  <?php echo "&pound". $total;?> </h5>
	</div>
  </div>
	</div>
<div class="flex-grid">
  <div class="items">This little piggy went to market.</div>
  <div class="items">Total price</div>
</div>
</body>
</html>