if(isset($_POST['favourite'])){
	if(isset($_SESSION['favourite'])){
		$favourite_array = array_column($_SESSION['favourite'], 'id');
		$_SESSION['id'] = $_POST['id'];
		print_r($favourite_array);
		if(in_array($_POST['id'], $favourite_array)){
			echo"<script>alert('Item has already been favourited')</script>";
		}
		else{
			$count = count($_SESSION['favourite']);
		$fav_array = array ('id'=>$_POST['id']);

		$_SESSION ['favourite'][$count]=$fav_array;
		print_r($_SESSION['favourite']);
		
		}
	}
	else{
	$fav_array = array('id'=>$_POST['id']);

	//create new session variable.
	$_SESSION['favourite'][0] = $fav_array;
	//print_r($_SESSION['cart']);
	}
}

//if add button is pressed.

if(isset($_POST['add'])){

	//if session is set
	
	if(isset($_SESSION['cart'])){

		//create column array.
		$item_array_id = array_column($_SESSION['cart'],'id');
		print_r($item_array_id);

		//If item is already in cart display message.
		if(in_array($_POST['id'], $item_array_id)){
		echo"<script>alert('Product is already added to the cart')</script>";
		//echo"<script>window.location='Clothing.php'</script>";
		}
		else
		{
		//else add item to cart.
		$count = count($_SESSION['cart']);
		$item_array = array ('id'=>$_POST['id']);

		$_SESSION ['cart'][$count]=$item_array;
		print_r($_SESSION['cart']);
		}
	}
	else{
	$item_array = array('id'=>$_POST['id']);

	//create new session variable.
	$_SESSION['cart'][0] = $item_array;
	//print_r($_SESSION['cart']);
	}
}

<?php

				if(isset($_SESSION['cart'])){
		
					//$item_array_id = array_column($_SESSION['cart'],'id');
					$item_array_productid = array_column ($_SESSION['cart'], 'productid');
			
			

					$sql = "SELECT * FROM product_details Left JOIN product on product_details.productID = product.productID";
					$fav = mysqli_query($conn,$sql);
			
			
		


					while ($row = mysqli_fetch_assoc($fav)){
					foreach($item_array_productid as $id){
						if($row['product_detail_ID'] == $id ){
				  
			
					?>
	
	  
								 <form action="" method="post">
									<div class="flex_container">
									 <div class="productimage">1</div>
									<div class="productinfo"><?php echo $row['productname'];?><br>
									<input  type="hidden" name="id" value= "<?php echo $row['product_detail_ID'];?>"</input>
									<button class="unfav" name="unfav"><i class="far fa-heart"></i> Save for later</button>
									<button name="add" >Add to cart</button></div>
									</div>
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