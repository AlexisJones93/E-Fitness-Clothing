<?php

if(isset($_POST['add'])){

	//if session is set
	$sql2 ="SELECT product_detail_ID FROM product_details WHERE  size AND  colour = '$_POST[size]'AND'$_POST[colour]'";
		$name = mysqli_query($conn, $sql2);
		
		while ($row = mysqli_fetch_array($name)){
		  echo $row['product_detail_ID'];
		}

	if(isset($_SESSION['cart'])){

	  

		//create column array.
		$item_array_id = array_column($_SESSION['cart'],'id','productid');
		print_r($item_array_id);

		//If item is already in cart display message.
		if(in_array($_POST['id'], $item_array_id)){
		echo"<script>alert('Product is already added to the cart')</script>";
		echo"<script>window.location='Clothing.php'</script>";
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
		$item_array = array('id'=>$_POST['id'],'colour'=>$_POST['colour'],'size'=>$_POST['size']);

		//create new session variable.
		$_SESSION['cart'][0] = $item_array;
		print_r($_SESSION['cart']);
	}

	
}

 


?>