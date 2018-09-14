<?php

include_once '../Controlador/DaoMascota.php';
include_once '../Modelo/mascota.php';

$idmascota     =$_POST["txtID"];
$fecha_ingreso =$_POST["date"];
$nombre        =$_POST["txtNombre"];
$edad          =$_POST["txtEdad"];
$raza          =$_POST["txtRaza"];
$observacion   =$_POST["txtObs"];
$sexo          =$_POST["cboSexo"];

$mascota =new mascota();
$mascota->setIdmascota($idmascota);
$mascota->setFecha_ingreso($fecha_ingreso);
$mascota->setNombre($nombre);
$mascota->setEdad($edad);
$mascota->setRaza($raza);
$mascota->setObservacion($observacion);
$mascota->setSexo($sexo);

$dao=new DaoMascota();
$filas_afectadas=$dao->Grabar($mascota);
if ($filas_afectadas>0) {
    echo 'Mascota Registrada';
} else {
    echo 'No se logró Registrar';
}