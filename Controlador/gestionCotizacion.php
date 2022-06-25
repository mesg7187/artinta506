<?php
require 'mysqlConnection.php';
require 'contizacion.php';
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of gestionCotizacion
 *
 * @author mario
 */
class gestionCotizacion {
        //put your code here
    public $idCliente;
    public $cedula;
    public $nombre;
    public $primerApellido;
    public $segundoApellido;
    public $provincia;
    public $numeroTelefonico;
    public $email;
    public $instagram;
    public $facebook;
    public $descripcionTatuaje;
    public $tamanho;  
    public $parteDelCuerpo;
    public $autorizo;
    public $leido;  
    
    
    public function constructor($show, $character) {
        $this->show = $show;
        $this->character = $character;
    }

//  public function __construct($show, $character) {

    function getCliente($idCliente) {
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT id, firstname, lastname FROM MyGuests WHERE lastname='Doe'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $userObj = new cliente($row["id"],$row["firstname"]);

            }
        } else {
            echo "0 results";
        }

        $conn->close();

        $userObj = new cliente();
        var_dump($userObj);
        return $userObj;
    }

}
