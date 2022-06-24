<html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>
     
     <h1>hola</h1>
 </body>

<?php include 'mysqlConnection.php';

// Create connection
$conn = new mysqli($$hostname, $username, $password,$databaseName);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

echo "<br>";


$sql = "SELECT *

FROM
    test;";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["idTest"]. " - Name: " . $row["valor1"]. " " . $row["valor2"]. "<br>";
  }
} else {
  echo "0 results";
}

//INSERTA CLIENTE---------------------------------------------->
/*

$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtMessage = $_POST['txtMessage'];
$test0 = "01";
$test1 = "prueba1";
$test2 = "prueba2";


$sql = "INSERT INTO test (idTest, valor1, valor2)
VALUES ($test0,'$test1', '$test2')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
*/
$conn->close();

?>
 </body>
</html>