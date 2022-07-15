<?php

require '../../datos/mysqlConnection.php';
require '../../mailer/mailCotizacion.php';
date_default_timezone_set("America/Costa_Rica");

//////////CLIENTE INFO/////////////////
$idCliente = intval( date("Ymdhs") .(rand(10,100)));
$nombre = $_POST['nombre'];
$primerApellido = $_POST['primerApellido'];
$segundoApellido = $_POST['segundoApellido'];
$email = $_POST['email'];
$numeroTelefonico = $_POST['numeroTelefonico'];

//////////COTIZACION INFO/////////////////
$idCotizacion = intval( date("Ymdhs") .(rand(10,100)));
$estado = "abierto";
$fechaHoraCreacion = date("Y-m-d h:i:sa");
$fechaHoraRespuesta = " ";
$descripcionTatuaje = $_POST['descripcionTatuaje'];
$tamanho = $_POST['tamanho'];
$parteDelCuerpo = $_POST['parteDelCuerpo'];
$preferenciasCovid = $_POST['preferenciasCovid'];
$disponibilidad = $_POST['disponibilidad'];
$autorizo = $_POST['autorizo'];
$leido = $_POST['leido'];

//////////EMAIL INFO/////////////////
$subject = "Cotizacion de " . $idCotizacion . " para tatuaje con Artinta506";
$body = "Un saludo de parte de Artinta506,    "
        . "En este momento estamos analizando su solicitud de tatuaje con la siguiente description:  "
        . ""
        . "" . $descripcionTatuaje;

$email2 = "artinta506@gmail.com";
$subejct2="Cotizacion".$idCotizacion. " para El cliente :".$nombre." ".$primerApellido;
$body2="https://artinta506.com/vistas/viewCotizacion.php?cotizacion=".$idCotizacion;
 // header("Location: /mailer/mailCotizacion.php?email=".$email."&subject=".$subject."&body=".$body."&email2=".$email2."&subject2=".$subejct2."&body2=".$body2);


//////////INSERT CLIENTE /////////////////
$conn = new mysqli($hostname, $username, $password, $databaseName);
$sql = "INSERT INTO cliente(idCliente,nombre,primerApellido,segundoApellido,email,numeroTelefonico) VALUES
  ('". $GLOBALS["idCliente"] . "', '" . $GLOBALS["nombre"] . "', '" . $GLOBALS["primerApellido"] . "', '" . $GLOBALS["segundoApellido"] . "', '" . $GLOBALS["email"] . "', '" . $GLOBALS["numeroTelefonico"] ."')";

if (mysqli_query($conn, $sql)) {
    //echo 'CLIENTE GUARDADO';
    // header("Location: /mailer/mailCotizacion.php?email=".$email."&subject=".$subject."&body=".$body);
} else {

   // echo("CLIENTE NO GURADADO CON ERROR->" . mysqli_error($conn));
}
$conn->close();

//////////INSERT COTIZACION/////////////////
$conn = new mysqli($hostname, $username, $password, $databaseName);
$sql = "INSERT INTO cotizacion(idCotizacion,idCliente, estado,fechaHoraCreacion,fechaHoraRespuesta,descripcionTatuaje,tamanho,parteDelCuerpo,preferenciasCovid,disponibilidad,autorizo,leido) VALUES
  ('". $GLOBALS["idCotizacion"] . "', '". $GLOBALS["idCliente"] . "', '" . $GLOBALS["estado"] . "', '" . $GLOBALS["fechaHoraCreacion"] . "', '" . $GLOBALS["fechaHoraRespuesta"] . "', '" . $GLOBALS["descripcionTatuaje"] . "', '" . $GLOBALS["tamanho"] . "', '" . $GLOBALS["parteDelCuerpo"] . "', '" . $GLOBALS["preferenciasCovid"] . "', '" . $GLOBALS["disponibilidad"] . "', '" . $GLOBALS["autorizo"] . "', '" . $GLOBALS["leido"] . "')";

if (mysqli_query($conn, $sql)) {
   // echo 'COTIZACION GUARDADA';
   header("Location: /mailer/mailCotizacion.php?email=".$email."&subject=".$subject."&body=".$body."&email2=".$email2."&subject2=".$subejct2."&body2=".$body2);
} else {

   // echo("COTIZACION NO GURADADA CON ERROR->" . mysqli_error($conn));
}
$conn->close();

//////////ENVIA EMAIL/////////////////
//header("Location: /mailer/mailCotizacion.php?email=".$email."&subject=S&body=B");
//exit();


//////////INSERT IMAGEN/////////////////
    //=========================SUBIR IMAGEN 1================================
if (isset($_POST['upload'])) {
    $conn = new mysqli($hostname, $username, $password, $databaseName);

    mkdir("images/" . $idCotizacion . "/"); //CREA EL SUB DIRECTORIO
    $image = $_FILES['image1']['name']; //OBTIENE EL NOMBRE LA IMAGEN DEL POST
    $target = "images/" . $idCotizacion . "/" . basename($image); //DICE DONDE SE VA A GUARDAR

    $sql = "INSERT INTO images (image, idCotizacion) VALUES ('$image', '$idCotizacion')";
// execute query
    mysqli_query($conn, $sql); //HACE LA INSERSION EN LA DB

    if (move_uploaded_file($_FILES['image1']['tmp_name'], $target)) {//MANDA LA IMAGEN AL FOLDER QUE PUSIMOS EN EL TARGET
     //   echo 'IMAGEN GUARDADA ';
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
      //  echo 'IMAGEN GUARDADA ';
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
      //  echo 'IMAGEN GUARDADA ';
        $msg = "Image uploaded successfully";
    } else {
        $msg = "FALLO AL GUARDAR IMAGEN";
    }
    $conn->close();
        //=========================SUBIR IMAGEN 4================================
    $conn = new mysqli($hostname, $username, $password, $databaseName);

    mkdir("images/" . $idCotizacion . "/");
    $image = $_FILES['image4']['name'];
// Get text
//$image_text = mysqli_real_escape_string($db, $idCotizacion);
// image file directory
    $target = "images/" . $idCotizacion . "/" . basename($image);

    $sql = "INSERT INTO images (image, idCotizacion) VALUES ('$image', '$idCotizacion')";
// execute query
    mysqli_query($conn, $sql);

    if (move_uploaded_file($_FILES['image4']['tmp_name'], $target)) {
     //  echo 'IMAGEN GUARDADA ';
      //  $msg = "Image uploaded successfully";
    } else {
        $msg = "FALLO AL GUARDAR IMAGEN";
    }
    $conn->close();
}
?>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
	<style>
		@import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
		@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
	</style>
	<link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
</head>
<body>
	<header class="site-header" id="header">
		<h1 class="site-header__title" data-lead-id="site-header-title">Gracias</h1>
	</header>

	<div class="main-content">
		<i class="fa fa-check main-content__checkmark" id="checkmark"></i>
		<p class="main-content__body" data-lead-id="main-content-body">Analizaremos su informacion y le estaremos contactando proximamente para gestionar su cotizacionn. Porfavor revise su correo para confirmar que se genero un numero de cotizacion</p>
	</div>

	<footer class="site-footer" id="footer">
		<p class="site-footer__fineprint" id="fineprint">Copyright ©2022 | Todos los derechos reservados</p>
	</footer>
</body>
</html>