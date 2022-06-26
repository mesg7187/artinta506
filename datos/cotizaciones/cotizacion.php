<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of contizacion
 *
 * @author mario
 */
class contizacion {

    //put your code here
    public $idCotizacion;
    public $estado;
    public $fechaHoraCreacion;
    public $fechaHoraRespuesta;
    public $nombre;
    public $primerApellido;
    public $segundoApellido;
    public $email;
    public $numeroTelefonico;
    public $descripcionTatuaje;
    public $tamanho;
    public $parteDelCuerpo;
    public $preferenciasCovid;
    public $disponibilidad;
    public $autorizo;
    public $leido;

    public function constructor($idCotizacion, $estado, $fechaHoraCreacion, $fechaHoraRespuesta, $nombre, $primerApellido, $segundoApellido,
            $email, $numeroTelefonico, $descripcionTatuaje, $tamanho, $parteDelCuerpo, $preferenciasCovid, $disponibilidad, $autorizo, $leido) {

        $this->idCotizacion = $idCotizacion;
        $this->estado = $estado;
        $this->fechaHoraCreacion = $fechaHoraCreacion;
        $this->fechaHoraRespuesta = $fechaHoraRespuesta;
        $this->nombre = $nombre;
        $this->primerApellido = $primerApellido;
        $this->segundoApellido = $segundoApellido;
        $this->email = $email;
        $this->numeroTelefonico = $numeroTelefonico;
        $this->descripcionTatuaje = $descripcionTatuaje;
        $this->tamanho = $tamanho;
        $this->parteDelCuerpo = $parteDelCuerpo;
        $this->preferenciasCovid = $preferenciasCovid;
        $this->disponibilidad = $disponibilidad;
        $this->autorizo = $autorizo;
        $this->leido = $leido;
    }

    public function getIdCotizacion() {
        return $this->idCotizacion;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function getFechaHoraCreacion() {
        return $this->fechaHoraCreacion;
    }

    public function getFechaHoraRespuesta() {
        return $this->fechaHoraRespuesta;
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

    public function getEmail() {
        return $this->email;
    }

    public function getNumeroTelefonico() {
        return $this->numeroTelefonico;
    }

    public function getDescripcionTatuaje() {
        return $this->descripcionTatuaje;
    }

    public function getTamanho() {
        return $this->tamanho;
    }

    public function getParteDelCuerpo() {
        return $this->parteDelCuerpo;
    }

    public function getPreferenciasCovid() {
        return $this->preferenciasCovid;
    }

    public function getDisponibilidad() {
        return $this->disponibilidad;
    }

    public function getAutorizo() {
        return $this->autorizo;
    }

    public function getLeido() {
        return $this->leido;
    }

    public function setIdCotizacion($idCotizacion): void {
        $this->idCotizacion = $idCotizacion;
    }

    public function setEstado($estado): void {
        $this->estado = $estado;
    }

    public function setFechaHoraCreacion($fechaHoraCreacion): void {
        $this->fechaHoraCreacion = $fechaHoraCreacion;
    }

    public function setFechaHoraRespuesta($fechaHoraRespuesta): void {
        $this->fechaHoraRespuesta = $fechaHoraRespuesta;
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

    public function setEmail($email): void {
        $this->email = $email;
    }

    public function setNumeroTelefonico($numeroTelefonico): void {
        $this->numeroTelefonico = $numeroTelefonico;
    }

    public function setDescripcionTatuaje($descripcionTatuaje): void {
        $this->descripcionTatuaje = $descripcionTatuaje;
    }

    public function setTamanho($tamanho): void {
        $this->tamanho = $tamanho;
    }

    public function setParteDelCuerpo($parteDelCuerpo): void {
        $this->parteDelCuerpo = $parteDelCuerpo;
    }

    public function setPreferenciasCovid($preferenciasCovid): void {
        $this->preferenciasCovid = $preferenciasCovid;
    }

    public function setDisponibilidad($disponibilidad): void {
        $this->disponibilidad = $disponibilidad;
    }

    public function setAutorizo($autorizo): void {
        $this->autorizo = $autorizo;
    }

    public function setLeido($leido): void {
        $this->leido = $leido;
    }

    public function constructor($idCotizacion, $estado, $fechaHoraCreacion, $fechaHoraRespuesta, $nombre, $primerApellido, $segundoApellido,
            $email, $numeroTelefonico, $descripcionTatuaje, $tamanho, $parteDelCuerpo, $preferenciasCovid, $disponibilidad, $autorizo, $leido) {

        $this->idCotizacion = $idCotizacion;
        $this->estado = $estado;
        $this->fechaHoraCreacion = $fechaHoraCreacion;
        $this->fechaHoraRespuesta = $fechaHoraRespuesta;
        $this->nombre = $nombre;
        $this->primerApellido = $primerApellido;
        $this->segundoApellido = $segundoApellido;
        $this->email = $email;
        $this->numeroTelefonico = $numeroTelefonico;
        $this->descripcionTatuaje = $descripcionTatuaje;
        $this->tamanho = $tamanho;
        $this->parteDelCuerpo = $parteDelCuerpo;
        $this->preferenciasCovid = $preferenciasCovid;
        $this->disponibilidad = $disponibilidad;
        $this->autorizo = $autorizo;
        $this->leido = $leido;
    }

}
