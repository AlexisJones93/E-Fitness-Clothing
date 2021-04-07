<?php

if(isset($_POST['add'])){

	//if session is set
	$query ="SELECT DISTINCT product_detail_ID FROM product_details WHERE productID = '$row[productID]' AND colour = '$_POST[colour]' AND size = '$_POST[size]'";
	$productid = mysqli_query($conn, $query);
	$rows =mysqli_fetch_assoc($productid);
	

	if(isset($_SESSION['cart'])){

	  

		//create column array.
		$item_array_id = array_column($_SESSION['cart'],'productid');
		//print_r($item_array_id);

		//If item is already in cart display message.
		if(in_array($rows['product_detail_ID'], $item_array_id)){
		echo"<script>alert('Product is already added to the cart')</script>";
		echo"<script>window.location='Clothing.php'</script>";
		}
		else
		{
			//else add item to cart.
			$count = count($_SESSION['cart']);
			$item_array = array ('productid'=> $rows['product_detail_ID'],'id'=>$_POST['id'],'colour'=>$_POST['colour'],'size'=>$_POST['size']);

			$_SESSION ['cart'][$count]=$item_array;
			print_r($_SESSION['cart']);
		}
	}
	else{
		$item_array = array('productid'=> $rows['product_detail_ID'],'id'=>$_POST['id'],'colour'=>$_POST['colour'],'size'=>$_POST['size'] );

		//create new session variable.
		$_SESSION['cart'][0] = $item_array;
		print_r($_SESSION['cart']);
	}
}

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


?>