<?PHP


include('connect.php');

$sql = "SELECT * from product";
$result = mysqli_query($conn,$sql);

if(isset($_POST['add'])){
	print_r($_POST['id']);
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

    <header>
        <h6>Header</h6>


    </header>
    <nav>
        <a href="home.html">Logo</a>
        <a href="#">Sale</a>
        <a href="#">New In</a>
        <a href="#">Clothes</a>
        <a href="#">Shoes</a>
        <a href="#">Accessories</a>

    </nav>

	
	
	<?php 
	
	while ($row = mysqli_fetch_array($result)){
	
	?>
	
	   <div class="flex_row">
			<div class="flex_container">
			 <div class="productimage">1</div>
			<div class="productinfo"><?php echo $row['productname'];?>
			<button name="add" >Add to cart</button></div>
			<input type="hidden" name="id" value= "<?php echo $row['productID'];?>"</input>
			</div>
		</div>
	<?php
	}
	
	?>
	
	
    <footer>

        <p>Contact us</p>
    </footer>


</body>
</html>