<?php 

	$sql1 ="SELECT DISTINCT size FROM product_details WHERE productID = '$row[productID]'";
	$name = mysqli_query($conn, $sql1);

		while ($line = mysqli_fetch_array($name)){			
					
			 echo"<option name=size>$line[size]</option>";
			 
		}
					
?>