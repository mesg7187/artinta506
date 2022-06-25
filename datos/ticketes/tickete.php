<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of tickete
 *
 * @author mario
 */
class tickete {
    //put your code here
    public $idTickete;
    public $descripcionTatuaje;
    public $tamanho;  
    public $parteDelCuerpo;
    public $autorizo;
    public $leido;  
    public function getIdTickete() {
        return $this->idTickete;
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

    public function getAutorizo() {
        return $this->autorizo;
    }

    public function getLeido() {
        return $this->leido;
    }

    public function setIdTickete($idTickete): void {
        $this->idTickete = $idTickete;
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

    public function setAutorizo($autorizo): void {
        $this->autorizo = $autorizo;
    }

    public function setLeido($leido): void {
        $this->leido = $leido;
    }


}
