<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of cliente
 *
 * @author mario
 */
class cliente {

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

    public function getIdCliente() {
        return $this->idCliente;
    }

    public function getCedula() {
        return $this->cedula;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getPrimerApellido() {
        return $this->primerApellido;
    }

    public function getSegundoApellido() {
        return $this->segundoApellido;
    }

    public function getProvincia() {
        return $this->provincia;
    }

    public function getNumeroTelefonico() {
        return $this->numeroTelefonico;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getInstagram() {
        return $this->instagram;
    }

    public function getFacebook() {
        return $this->facebook;
    }

    public function setIdCliente($idCliente): void {
        $this->idCliente = $idCliente;
    }

    public function setCedula($cedula): void {
        $this->cedula = $cedula;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function setPrimerApellido($primerApellido): void {
        $this->primerApellido = $primerApellido;
    }

    public function setSegundoApellido($segundoApellido): void {
        $this->segundoApellido = $segundoApellido;
    }

    public function setProvincia($provincia): void {
        $this->provincia = $provincia;
    }

    public function setNumeroTelefonico($numeroTelefonico): void {
        $this->numeroTelefonico = $numeroTelefonico;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }

    public function setInstagram($instagram): void {
        $this->instagram = $instagram;
    }

    public function setFacebook($facebook): void {
        $this->facebook = $facebook;
    }

}
