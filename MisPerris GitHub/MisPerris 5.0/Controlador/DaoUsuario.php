<?php

include_once 'conexion.php';
include_once '../Modelo/usuario.php';

class DaoUsuario {
    private $cone;
    
    function __construct() {
        try {
            $this->cone = new conexion();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function Grabar($id_user) {
        try {
            $sql = "insert into user "
                    . "values('@idu','@user','@pass')";
            $sql = str_replace("@idu", $id_user->getId_user(), $sql);
            $sql = str_replace("@user", $id_user->getUser(), $sql);
            $sql = str_replace("@pass", $id_user->getPass(), $sql);
            return $this->cone->SqlOperacion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function Listar() {
        try {
            $sql = "select * from user";
            return $this->cone->SqlSeleccion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
}
