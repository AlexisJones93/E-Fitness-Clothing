<?php 
session_start();
include('Connect.php');


$sql ="SELECT * FROM product WHERE productname = '$_GET[id]' "	;
$result = mysqli_query($conn, $sql);
$row =mysqli_fetch_assoc($result);





include('Shopping_cart_array.php');



?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta charset="utf-8" />
  <link rel="stylesheet" href="StyleSheet1.css" /> 
    <title>E-Fitness Clothing</title>
    
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>


<?php include('Header.html');   ?> 

<div class="wrapper">
		<div class="flex_container">
			<a href="ProductView.php"><img class="productview" src="Img\BlackJoggers.jpg"></a>
        </div>
		<div class="flex_container_productdetails">
			<form action="" method="post">
				<div class="productdetails" name="name"><?php echo $row['productname'];?><br><div>
				<hr>
					<input  name="id" type="hidden"value="<?php echo $row['productID'];?>"</input>
				<p class="productdetails"> Colour</p>
					<div class="container_row"><?php include('colour_buttons.php');?></div>
					<input  name="colour" type="hidden"value="<?php echo $colour;?>"</input>
				<p class="productdetails"> Size</p>
				<div class="container_row">
					<select name="size">
					<?php include('size_drop_down.php') ?>
					</select>
				</div>
				<button name="add">Add to cart</button><br>
				<button name="favourite"><i class="far fa-heart"></i></button>
				</div>
			</form>
		</div>
</div>

</body>
</html>