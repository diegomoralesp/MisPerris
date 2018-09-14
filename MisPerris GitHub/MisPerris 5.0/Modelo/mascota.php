<?php

class mascota {
    private $idmascota;
    private $fecha_ingreso;
    private $nombre;
    private $edad;
    private $raza;
    private $observacion;
    private $sexo;
    
    function __construct() {
        return $this->idmascota;
    }
    
    function getIdmascota() {
        return $this->idmascota;
    }

    function getFecha_ingreso() {
        return $this->fecha_ingreso;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getEdad() {
        return $this->edad;
    }

    function getRaza() {
        return $this->raza;
    }

    function getObservacion() {
        return $this->observacion;
    }
    
    function getSexo() {
        return $this->sexo;
    }

    function setIdmascota($idmascota) {
        $this->idmascota = $idmascota;
    }

    function setFecha_ingreso($fecha_ingreso) {
        $this->fecha_ingreso = $fecha_ingreso;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setEdad($edad) {
        $this->edad = $edad;
    }

    function setRaza($raza) {
        $this->raza = $raza;
    }

    function setObservacion($observacion) {
        $this->observacion = $observacion;
    }
    
    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

}
