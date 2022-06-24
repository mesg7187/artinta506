<?php include 'mysqlConnection.php';?>
<?php
//INSERTA CLIENTE---------------------------------------------->
// Create connection
$connect = new mysqli($hostname, $username, $password, $databaseName);
// Check connection
if ($connect->connect_error) {
  die("Connection failed: " . $connect->connect_error);
}

$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtMessage = $_POST['txtMessage'];


$sql = "INSERT INTO MyGuests ($txtName , lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($connect->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $connect->error;
}

$connect->close();

if ($connect->connect_error) {
  die("Connection failed: " . $connect->connect_error);
}

//CREA TICKETE ---------------------------------------------->
$sql = "INSERT INTO MyGuests ($txtName , lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($connect->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $connect->error;
}

$connect->close();


//MANDA CORREO  ---------------------------------------------->
$sql = "INSERT INTO MyGuests ($txtName , lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($connect->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $connect->error;
}

$connect->close();


?>