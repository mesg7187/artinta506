<?php  
$connect = mysqli_connect("localhost", "root", "M@rio741", "performance");
$sql = "INSERT INTO managers(FirstName,LastName,email) VALUES('".$_POST["FirstName"]."', '".$_POST["LastName"]."', '".$_POST["email"]."')";  
if(mysqli_query($connect, $sql))  
{  	
     echo 'Data Inserted';  
}  else{

echo("Error description: " . mysqli_error($connect));
		
	}
 ?>