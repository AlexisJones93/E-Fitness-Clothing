
<?php


$sql1 ="SELECT DISTINCT colour FROM product_details WHERE productID = '$row[productID]'";
$name = mysqli_query($conn, $sql1);




while ($line = mysqli_fetch_array($name)){
	
	    
		if($line['colour'] == 'black')
		{
		   echo"<div class=btn_parent><button name=black_button class=black_coloured_button></button></div>";
		   
		}
		if($line['colour']== 'pink'){
		  echo"<div class=btn_parent><button name=pink_button  class=pink_coloured_button></button></div>";
		  
		}
   
	
}

if(isset($_POST['pink_button'])){
   $colour = 'pink';
   return $colour;
   

}
else if(isset($_POST['black_button'])){
   $colour = 'black';
    return $colour;
    

}

?>