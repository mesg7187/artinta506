<?php  
require '../../datos/mysqlConnection.php';
$connect = new mysqli($hostname, $username, $password, $databaseName);
$sql = "INSERT INTO cotizacion(idCotizacion,idCliente, estado,fechaHoraCreacion,fechaHoraRespuesta,descripcionTatuaje,tamanho,parteDelCuerpo,preferenciasCovid,disponibilidad,autorizo,leido) VALUES"
        . "('".$_POST["idCotizacion"]."', '".$_POST["idCliente"]."', '".$_POST["estado"]."''".$_POST["fechaHoraCreacion"]."', '".$_POST["fechaHoraRespuesta"]."''".$_POST["descripcionTatuaje"]."','".$_POST["tamanho"]."', '".$_POST["parteDelCuerpo"]."', '".$_POST["preferenciasCovid"]."''".$_POST["disponibilidad"]."', '".$_POST["autorizo"]."''".$_POST["leido"]."')";  
if(mysqli_query($connect, $sql))  
{  	
     echo 'Data Inserted';  
}  else{

echo("Error description: " . mysqli_error($connect));
		
	}
 ?>