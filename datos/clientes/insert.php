<?php  
require '../../datos/mysqlConnection.php';
$connect = new mysqli($hostname, $username, $password, $databaseName);
$sql = "INSERT INTO cliente(idCliente,nombre,primerApellido,segundoApellido,email,numeroTelefonico) VALUES"
        . "('".$_POST["idCliente"]."', '".$_POST["nombre"]."', '".$_POST["primerApellido"]."''".$_POST["segundoApellido"]."', '".$_POST["email"]."''".$_POST["numeroTelefonico"]."')";  
if(mysqli_query($connect, $sql))  
{  	
     echo 'Data Inserted';  
}  else{

echo("Error description: " . mysqli_error($connect));
		
	}
 ?>