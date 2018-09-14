<?php

include_once '../controlador/DaoPostulante.php';
$dao=new DaoPostulante();
$run=$_GET["run"];
$resp=$dao->Eliminar($run);
//redireccionar
header("location:listar_postulantes.php");
