<?php

class postulante {
    private $run;
    private $nombre;
    private $fechaNac;
    private $email;
    private $telefono;
    private $genero;
    private $direccion;
    private $ciudad;
    private $tipo_vivienda;
            
    
    function __construct() {
        return $this->run;
    }
    
    function getRun() {
        return $this->run;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getFechaNac() {
        return $this->fechaNac;
    }

    function getEmail() {
        return $this->email;
    }

    function getTelefono() {
        return $this->telefono;
    }
    
    function getGenero() {
        return $this->genero;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getCiudad() {
        return $this->ciudad;
    }
    
    function getTipo_vivienda() {
        return $this->tipo_vivienda;
    }

    function setRun($run) {
        $this->run = $run;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setFechaNac($fechaNac) {
        $this->fechaNac = $fechaNac;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }
    function setCiudad($ciudad) {
        $this->ciudad = $ciudad;
    }
    
    function setTipo_vivienda($tipo_vivienda) {
        $this->tipo_vivienda = $tipo_vivienda;
    }
    
    function setGenero($genero) {
        $this->genero = $genero;
    }

}
