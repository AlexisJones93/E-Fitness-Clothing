
<?php

// fetching distinct colours from the database that the clothing item comes in.
$sql1 ="SELECT DISTINCT colour FROM product_details WHERE productID = '$row[productID]'";
$name = mysqli_query($conn, $sql1);



// Displaying the appropriate coloured buttons for the clothing item.
while ($line = mysqli_fetch_array($name)){
	
	    
		if($line['colour'] == 'black')
		{
		   echo"<div class=btn_parent><button name=black_button class=black_coloured_button></button></div>";
		   
		}
		if($line['colour']== 'white'){
		  echo"<div class=btn_parent><button name=white_button  class=white_coloured_button></button></div>";
		  
		}
		if($line['colour']== 'mocha'){
		  echo"<div class=btn_parent><button name=mocha_button  class=mocha_coloured_button></button></div>";
		  
		}
		if($line['colour']== 'sage'){
		  echo"<div class=btn_parent><button name=sage_button  class=sage_coloured_button></button></div>";
		  
		}
		if($line['colour']== 'grey'){
		  echo"<div class=btn_parent><button name=grey_button  class=grey_coloured_button></button></div>";
		  
		}
		if($line['colour']== 'stone'){
		  echo"<div class=btn_parent><button name=stone_button  class=stone_coloured_button></button></div>";
		  
		}	
}

//Looking at what colour is clicked on to send to the cart array.

if(isset($_POST['white_button'])){
   $colour = 'white';
   return $colour;
}
else if(isset($_POST['black_button'])){
   $colour = 'black';
    return $colour;
}
else if(isset($_POST['mocha_button'])){
   $colour = 'mocha';
    return $colour;
}
else if(isset($_POST['sage_button'])){
   $colour = 'sage';
    return $colour;
}
else if(isset($_POST['grey_button'])){
   $colour = 'grey';
    return $colour;
}
else if(isset($_POST['stone_button'])){
   $colour = 'stone';
    return $colour;
}

?>