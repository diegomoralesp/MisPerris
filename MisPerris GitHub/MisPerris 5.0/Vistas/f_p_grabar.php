<?php

include_once '../Controlador/DaoPostulante.php';
include_once '../Modelo/postulante.php';

$run       =$_POST["txtRun"];
$nombre    =$_POST["txtNombre"];
$fechaNac  =$_POST["date"];
$email     =$_POST["txtEmail"];
$telefono  =$_POST["txtFono"];
$genero    =$_POST["cboSexo"];
$direccion =$_POST["txtDir"];
$ciudad    =$_POST["cboCiudad"];
$tipo_vivienda =$_POST["cboTipo"];

$postulante =new postulante();
$postulante->setRun($run);
$postulante->setNombre($nombre);
$postulante->setFechaNac($fechaNac);
$postulante->setEmail($email);
$postulante->setTelefono($telefono);
$postulante->setGenero($genero);
$postulante->setDireccion($direccion);
$postulante->setCiudad($ciudad);
$postulante->setTipo_vivienda($tipo_vivienda);

$dao=new DaoPostulante();
$filas_afectadas=$dao->Grabar($postulante);
if ($filas_afectadas>0) {
    echo 'Usuario Registrado';
} else {
    echo 'No se logró Registrar';
}