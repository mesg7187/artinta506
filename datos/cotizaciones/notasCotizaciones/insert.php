<?php  
require '../../../datos/mysqlConnection.php';
$connect = new mysqli($hostname, $username, $password, $databaseName);
//$sql = "INSERT INTO notasCotizacion(idCotizacion,fechaActual, descripcionActual,fechaSiguiente,descripcionSiguiente) VALUES ('".$_POST["idCotizacion"]."', '".$_POST["fechaActual"]."', '".$_POST["descripcionActual"]."''".$_POST["fechaSiguiente"]."', '".$_POST["descripcionSiguiente"]."')";  


$sql = "INSERT INTO notasCotizacion(idCotizacion,fechaActual, descripcionActual,fechaSiguiente,descripcionSiguiente) VALUES
  ('". $_POST["idCotizacion"] . "', '".$_POST["fechaActual"] . "', '" . $_POST["descripcionActual"] . "', '" . $_POST["fechaSiguiente"] . "', '" . $_POST["descripcionSiguiente"]. "')";

if(mysqli_query($connect, $sql))  
{  	
     echo 'Data Inserted';  
}  else{

echo("Error description: " . mysqli_error($connect));
		
	}
 ?>