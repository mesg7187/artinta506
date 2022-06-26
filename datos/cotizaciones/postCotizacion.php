<?php

require '../../datos/mysqlConnection.php';
date_default_timezone_set("America/Costa_Rica");
$idCotizacion = "3";
$estado = "abierto";
$fechaHoraCreacion = date("Y-m-d h:i:sa");
$fechaHoraRespuesta = " ";
$nombre = $_POST['nombre'];
$primerApellido = $_POST['primerApellido'];
$segundoApellido = $_POST['segundoApellido'];
$email = $_POST['email'];
$numeroTelefonico = $_POST['numeroTelefonico'];
$descripcionTatuaje = $_POST['descripcionTatuaje'];
$tamanho = $_POST['tamanho'];
$parteDelCuerpo = $_POST['parteDelCuerpo'];
$preferenciasCovid = $_POST['preferenciasCovid'];
$disponibilidad = $_POST['disponibilidad'];
$autorizo = $_POST['autorizo'];
$leido = $_POST['leido'];

$conn = new mysqli($hostname, $username, $password, $databaseName);

$sql = "INSERT INTO cotizacion(estado,fechaHoraCreacion,fechaHoraRespuesta,nombre,primerApellido,segundoApellido,email,numeroTelefonico,descripcionTatuaje,tamanho,parteDelCuerpo,preferenciasCovid,disponibilidad,autorizo,leido) VALUES
                 ('" . $GLOBALS["estado"] . "', '" . $GLOBALS["fechaHoraCreacion"] . "', '" . $GLOBALS["fechaHoraRespuesta"] . "', '" . $GLOBALS["nombre"] . "', '" . $GLOBALS["$primerApellido"] . "', '" . $GLOBALS["segundoApellido"] . "', '" . $GLOBALS["email"] . "', '" . $GLOBALS["numeroTelefonico"] . "', '" . $GLOBALS["descripcionTatuaje"] . "', '" . $GLOBALS["tamanho"] . "', '" . $GLOBALS["parteDelCuerpo"] . "', '" . $GLOBALS["preferenciasCovid"] . "', '" . $GLOBALS["disponibilidad"] . "', '" . $GLOBALS["autorizo"] . "', '" . $GLOBALS["leido"] . "')";

if (mysqli_query($conn, $sql)) {
    echo 'Data Inserted';
} else {

    echo("Error description: " . mysqli_error($conn));
}
$conn->close();
?>