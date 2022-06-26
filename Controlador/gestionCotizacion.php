<?php

//require '../datos/mysqlConnection.php';
require 'mysqlConnection.php';
//require '../datos/cotizaciones/contizacion.php';
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of gestionCotizacion
 *
 * @author mario
 */
date_default_timezone_set("America/Costa_Rica");
$idCotizacion = "";
$estado = "abierto";
$fechaHoraCreacion = date("Y-m-d h:i:sa");
$fechaHoraRespuesta = null;
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

$t = new gestionCotizacion;
$t->setCotizacion();
class gestionCotizacion {
    

//  public function __construct($show, $character) {
//
//INSERTA 

    function setCotizacion() {

      $conn = new mysqli($hostname, $username, $password,$databaseName);
        $sql = "INSERT INTO user(idCotizacion,estado,fechaHoraCreacion,fechaHoraRespuesta,nombre,primerApellido,segundoApellido,email,numeroTelefonico,descripcionTatuaje,tamanho,parteDelCuerpo,preferenciasCovid,disponibilidad,autorizo,leido) VALUES
                 ('".$GLOBALS["idCotizacion"]."', '".$GLOBALS["idCotizacionestado"]."', '".$GLOBALS["fechaHoraCreacion"]."', '".$GLOBALS["fechaHoraRespuesta"]."', '".$GLOBALS["nombre"]."', '".$GLOBALS["$primerApellido"]."', '".$GLOBALS["segundoApellido"]."', '".$GLOBALS["email"]."', '".$GLOBALS["numeroTelefonico"]."', '".$GLOBALS["descripcionTatuaje"]."', '".$GLOBALS["tamanho"]."', '".$GLOBALS["parteDelCuerpo"]."', '".$GLOBALS["preferenciasCovid"]."', '".$GLOBALS["disponibilidad"]."', '".$GLOBALS["autorizo"]."', '".$GLOBALS["leido"]."')";

        if (mysqli_query($conn, $sql)) {
            echo 'Data Inserted';
        } else {

            echo("Error description: " . mysqli_error($conn));
        }
        $conn->close();
    }

//
//EDITA
    function editCotizacion($idCliente) {
        
    }

//GET
    function getCotization($idCliente) {
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT idCotizacion, firstname, lastname FROM MyGuests WHERE lastname='Doe'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $userObj = new cliente($row["id"], $row["firstname"]);
            }
        } else {
            echo "0 results";
        }

        $conn->close();

        $userObj = new cliente();
        var_dump($userObj);
        return $userObj;
    }

//BORRA
    function deleteCotizacion($idCliente) {
        
    }

}

 ?>