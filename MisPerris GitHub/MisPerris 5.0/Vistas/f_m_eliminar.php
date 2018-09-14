<?php

include_once '../controlador/DaoMascota.php';
$dao=new DaoMascota();
$idmascota=$_GET["idmascota"];
$resp=$dao->Eliminar($idmascota);
//redireccionar
header("location:listar_mascotas.php");
