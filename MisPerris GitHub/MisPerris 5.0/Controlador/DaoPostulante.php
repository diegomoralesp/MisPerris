<?php

include_once 'conexion.php';
include_once '../Modelo/postulante.php';

class DaoPostulante {
    
    private $cone;
    
    function __construct() {
        try {
            $this->cone = new conexion();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function Grabar($run) {
        try {
            $sql = "insert into postulante "
                    . "values('@run','@nom','@nac','@email','@fono','@sexo','@dir','@ciu','@tipo')";
            $sql = str_replace("@run", $run->getRun(), $sql);
            $sql = str_replace("@nom", $run->getNombre(), $sql);
            $sql = str_replace("@nac", $run->getFechaNac(), $sql);
            $sql = str_replace("@email", $run->getEmail(), $sql);
            $sql = str_replace("@fono", $run->getTelefono(), $sql);
            $sql = str_replace("@sexo", $run->getGenero(), $sql);
            $sql = str_replace("@dir", $run->getDireccion(), $sql);
            $sql = str_replace("@ciu", $run->getCiudad(), $sql);
            $sql = str_replace("@tipo", $run->getTipo_vivienda(), $sql);
            return $this->cone->SqlOperacion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function Listar() {
        try {
            $sql = "select * from postulante";
            return $this->cone->SqlSeleccion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function Eliminar($run) {
        try {
            $sql = "delete from postulante where run='$run'";
            return $this->cone->SqlOperacion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }   
    
    public function Modificar($idmascota) {
        try {
            $sql = "update mascota set fecha_ingreso='@fei',nombre='@nom',edad='@edad',raza='@raza',observacion='@obs',sexo='@sexo' "
                    . "where idmascota='@idm'";
            $sql = str_replace("@idm", $idmascota->getIdmascota(), $sql);
            $sql = str_replace("@fei", $idmascota->getFecha_ingreso(), $sql);
            $sql = str_replace("@nom", $idmascota->getNombre(), $sql);
            $sql = str_replace("@edad", $idmascota->getEdad(), $sql);
            $sql = str_replace("@raza", $idmascota->getRaza(), $sql);
            $sql = str_replace("@obs", $idmascota->getObservacion(), $sql);
            $sql = str_replace("@sexo", $idmascota->getSexo(), $sql);
            return $this->cone->SqlOperacion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function Buscar($idmascota) {
        try {
            $sql = "select * from mascota where idmascota='$idmascota'";
            return $this->cone->SqlSeleccion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
}
