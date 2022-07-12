<?php  
require '../../datos/mysqlConnection.php';
echo "voy por aqui";

$connect = new mysqli($hostname, $username, $password, $databaseName);
	$id = $_POST["id"];  
	$text = $_POST["text"];  
	$column_name = $_POST["column_name"];  
                echo "el ide es..".$id."<br>" ;
        echo "el text es..".$text."<br>" ;
        echo "el colum es..".$column_name."<br>" ;
	$sql = "UPDATE cotizacion SET ".$column_name."='".$text."' WHERE idCotizacion ='".$id."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Updated';  
	}  
 ?>