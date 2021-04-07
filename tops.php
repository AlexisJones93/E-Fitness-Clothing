<?php
session_start();
include('Connect.php');


$sql = "SELECT * from product WHERE producttype = 'top'" ;
$result = mysqli_query($conn,$sql);

include('Shopping_cart_array.php');

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
					<button name="favourite"><i class="far fa-heart"></i></button>
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