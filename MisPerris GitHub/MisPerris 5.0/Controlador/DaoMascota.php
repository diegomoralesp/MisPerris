<?php

include_once 'conexion.php';
include_once '../Modelo/mascota.php';

class DaoMascota {
    
    private $cone;
    
    function __construct() {
        try {
            $this->cone = new conexion();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function Grabar($idmascota) {
        try {
            $sql = "insert into mascota "
                    . "values('@idm','@fei','@nom','@edad','@raza','@obs','@sexo')";
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
    
    public function Listar() {
        try {
            $sql = "select * from mascota";
            return $this->cone->SqlSeleccion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function Eliminar($idmascota) {
        try {
            $sql = "delete from mascota where idmascota='$idmascota'";
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
