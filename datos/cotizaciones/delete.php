<?php  

	$connect = mysqli_connect("localhost", "root", "M@rio741", "performance");
	$sql = "DELETE FROM managers WHERE id = '".$_POST["id"]."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Deleted';
	}  
	 else{

echo("Error description: " . mysqli_error($connect));
		
	}

 ?>