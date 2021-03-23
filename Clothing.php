<?PHP

session_start();

include('connect.php');




$sql = "SELECT * from product";
$result = mysqli_query($conn,$sql);

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
	
	if(isset($_POST['delete'])){
	session_unset();

	
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
<form action="" method="post">
	<button name="delete" >delete</button>
	</form>
    
    <?php include('Header.html');   ?> 

	
	
	
	<div class="wrapper">
		
	<?php 
	
	while ($row = mysqli_fetch_array($result)){
	
	?>
	
	   
	   <form action="" method="post">
			<div class="flex_container">
				 <div class="productimage">
					 <img src="Img\BlackJoggers.jpg"></div>
					 <div class="productinfo">
					<?php echo"<a href=\"ProductView.php?id=$row[productname]\"> $row[productname]</a>"?>
					<input  type="hidden" name="id" value= "<?php echo $row['productID'];?>"</input><br>
					<button name="add" >Add to cart</button>
					<button ><i name="favourite" class="far fa-heart"></i></button>
				</div>
			</div>
		</form>
		

	
	<?php
	}
	
	?>
	</div>

	
    <footer>

        <p>Contact us</p>
    </footer>


</body>
</html>