<?php  
require '../../../datos/mysqlConnection.php';
$connect = new mysqli($hostname, $username, $password, $databaseName);
	$sql = "DELETE FROM notasCotizacion WHERE idNotasCotizacion = '".$_POST["id"]."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Deleted';
	}  
	 else{

echo("Error description: " . mysqli_error($connect));
		
	}

 ?>