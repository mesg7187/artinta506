<?php  
require '../../datos/mysqlConnection.php';
$connect = new mysqli($hostname, $username, $password, $databaseName);
echo "voy";
	$id = $_POST["id"];  
	$text = $_POST["text"];  
	$column_name = $_POST["column_name"];  
                        echo "el ide es..".$id."<br>" ;
        echo "el text es..".$text."<br>" ;
        echo "el colum es..".$column_name."<br>" ;
	$sql = "UPDATE cliente SET ".$column_name."='".$text."' WHERE idCliente ='".$id."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Updated';  
        }  else {
            
            echo "ERROR";
        }
 ?>