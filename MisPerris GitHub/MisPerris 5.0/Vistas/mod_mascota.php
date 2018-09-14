<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/hoja.css">
    <title>Mis perris</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body bgcolor="FCFCFC">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <center>
        <div class="barra">
            <img style="width: 200px; position: relative; right: 470px; top: 5px" src="img/logo.png" alt="">
            <a href="Inicio.php" class="letra" style="text-decoration: none; position: relative; top: -10px; right: 150px;" >Inicio</a>
            <a href="gestion_mascotas.php" class="letra" style="text-decoration: none; position: relative; top: -10px; right: 75px;" >Atrás</a>
        </div>
        <?php
         include_once '../controlador/DaoMascota.php';
         $dao=new DaoMascota();
         $idmascota=$_GET["idmascota"];
         $reg=$dao->Buscar($idmascota);
         //recupera solo la primera fila
         $fila= mysqli_fetch_row($reg);
        ?>
        
        <form method="POST" action="f_m_modificar.php">
            <table border="3">
                <thead>
                    <tr>
                        <th>Formulario de Modificación</th>                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>ID Mascota:</td>
                        <td>
                            <input type="number" name="txtID" value="<?php echo $fila[0] ?>" /> 
                        </td>
                    </tr>
                    <tr>
                        <td>Fecha Ingreso:</td>
                        <td>
                            <input type="date" name="date" value="<?php echo $fila[1] ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>Nombre:</td>
                        <td>
                            <input type="text" name="txtNombre" value="<?php echo $fila[2] ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>Edad:</td>
                        <td>
                            <input type="number" name="txtEdad" value="<?php echo $fila[3] ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>Raza:</td>
                        <td>
                            <input type="text" name="txtRaza" value="<?php echo $fila[4] ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>Observación:</td>
                        <td>
                            <input type="text" name="txtObs" value="<?php echo $fila[5] ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>Sexo:</td>
                        <td>
                            <input type="text" name="txtSexo" value="<?php echo $fila[6] ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="Actualizar" />
                            <input type="reset" value="Limpiar" />
                        </td>                        
                    </tr>
                </tbody>
            </table>
        </form>
        
    </center>
</body>
</html>