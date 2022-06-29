<?php

require '../../datos/mysqlConnection.php';
require '../../mailer/mailCotizacion.php';
date_default_timezone_set("America/Costa_Rica");
$idCotizacion = date("Y-m-dh:i:sa") . '-' . mt_rand();
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

$subject = "Cotizacion de " . $idCotizacion . " para tatuaje con Artinta506";
$body = "Un saludo de parte de Artinta506,    "
        . "En este momento estamos analizando su solicitud de tatuaje con la siguiente description:  "
        . ""
        . "" . $descripcionTatuaje;
/*
  $conn = new mysqli($hostname, $username, $password, $databaseName);

  $sql = "INSERT INTO cotizacion(idCotizacion,estado,fechaHoraCreacion,fechaHoraRespuesta,nombre,primerApellido,segundoApellido,email,numeroTelefonico,descripcionTatuaje,tamanho,parteDelCuerpo,preferenciasCovid,disponibilidad,autorizo,leido) VALUES
  ('" . $GLOBALS["idCotizacion"] . "', '" . $GLOBALS["estado"] . "', '" . $GLOBALS["fechaHoraCreacion"] . "', '" . $GLOBALS["fechaHoraRespuesta"] . "', '" . $GLOBALS["nombre"] . "', '" . $GLOBALS["$primerApellido"] . "', '" . $GLOBALS["segundoApellido"] . "', '" . $GLOBALS["email"] . "', '" . $GLOBALS["numeroTelefonico"] . "', '" . $GLOBALS["descripcionTatuaje"] . "', '" . $GLOBALS["tamanho"] . "', '" . $GLOBALS["parteDelCuerpo"] . "', '" . $GLOBALS["preferenciasCovid"] . "', '" . $GLOBALS["disponibilidad"] . "', '" . $GLOBALS["autorizo"] . "', '" . $GLOBALS["leido"] . "')";

  if (mysqli_query($conn, $sql)) {
  echo 'COTIZACION GUARDADA';
  // header("Location: /mailer/mailCotizacion.php?email=".$email."&subject=".$subject."&body=".$body);
  } else {

  echo("COTIZACION NO GURADADA CON ERROR->" . mysqli_error($conn));
  }
  $conn->close();
 */
//header("Location: /mailer/mailCotizacion.php?email=".$email."&subject=S&body=B");
//exit();

if (isset($_POST['upload'])) {
    //=========================SUBIR IMAGEN 1================================
    $conn = new mysqli($hostname, $username, $password, $databaseName);

    mkdir("images/" . $idCotizacion . "/"); //CREA EL SUB DIRECTORIO
    $image = $_FILES['image1']['name']; //OBTIENE EL NOMBRE LA IMAGEN DEL POST
    $target = "images/" . $idCotizacion . "/" . basename($image); //DICE DONDE SE VA A GUARDAR

    $sql = "INSERT INTO images (image, idCotizacion) VALUES ('$image', '$idCotizacion')";
// execute query
    mysqli_query($conn, $sql); //HACE LA INSERSION EN LA DB

    if (move_uploaded_file($_FILES['image1']['tmp_name'], $target)) {//MANDA LA IMAGEN AL FOLDER QUE PUSIMOS EN EL TARGET
        echo 'IMAGEN GUARDADA ';
        $msg = "Image uploaded successfully";
    } else {
        $msg = "FALLO AL GUARDAR IMAGEN";
    }
    $conn->close();

    //=========================SUBIR IMAGEN 2================================
    $conn = new mysqli($hostname, $username, $password, $databaseName);

    mkdir("images/" . $idCotizacion . "/");
    $image = $_FILES['image2']['name'];
// Get text
//$image_text = mysqli_real_escape_string($db, $idCotizacion);
// image file directory
    $target = "images/" . $idCotizacion . "/" . basename($image);

    $sql = "INSERT INTO images (image, idCotizacion) VALUES ('$image', '$idCotizacion')";
// execute query
    mysqli_query($conn, $sql);

    if (move_uploaded_file($_FILES['image2']['tmp_name'], $target)) {
        echo 'IMAGEN GUARDADA ';
        $msg = "Image uploaded successfully";
    } else {
        $msg = "FALLO AL GUARDAR IMAGEN";
    }
    $conn->close();

    //=========================SUBIR IMAGEN 3================================
    $conn = new mysqli($hostname, $username, $password, $databaseName);

    mkdir("images/" . $idCotizacion . "/");
    $image = $_FILES['image3']['name'];
// Get text
//$image_text = mysqli_real_escape_string($db, $idCotizacion);
// image file directory
    $target = "images/" . $idCotizacion . "/" . basename($image);

    $sql = "INSERT INTO images (image, idCotizacion) VALUES ('$image', '$idCotizacion')";
// execute query
    mysqli_query($conn, $sql);

    if (move_uploaded_file($_FILES['image3']['tmp_name'], $target)) {
        echo 'IMAGEN GUARDADA ';
        $msg = "Image uploaded successfully";
    } else {
        $msg = "FALLO AL GUARDAR IMAGEN";
    }
    $conn->close();
}
?>