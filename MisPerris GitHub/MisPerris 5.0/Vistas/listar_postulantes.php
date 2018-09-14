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
            <a href="../Inicio.php" class="letra" style="text-decoration: none; position: relative; top: -10px; right: 150px;" >Inicio</a>
            <a href="gestion_postulantes.php" class="letra" style="text-decoration: none; position: relative; top: -10px; right: 75px;" >Atrás</a>
        </div>
        
        <h3>Listado de Postulantes</h3>

        <table class="table">
            <tr>
                <td>RUN</td>
                <td>Nombre</td>
                <td>Fecha Nacimiento</td>
                <td>Email</td>
                <td>Teléfono</td>
                <td>Género</td>
                <td>Direccion</td>
                <td>Ciudad</td>
                <td>Tipo de Vivienda</td>
                <td>Eliminar</td>
                <td>Modificar</td>
            </tr>
            <?php
            include_once '../Controlador/DaoPostulante.php';
            $dao = new DaoPostulante();
            $reg = $dao->Listar();
            $archivo= fopen("listado.csv", "w");
            fwrite($archivo, "run;nombre;fecha_nac;email;telefono;genero;direccion;ciudad;tipo_vivienda \n");
            while ($row = mysqli_fetch_array($reg)) {
                echo '<tr>';
                echo '<td>' . $row[0] . "</td>";
                echo '<td>' . $row[1] . "</td>";
                echo '<td>' . $row[2] . "</td>";
                echo '<td>' . $row[3] . "</td>";
                echo '<td>' . $row[4] . "</td>";
                echo '<td>' . $row[5] . "</td>";
                echo '<td>' . $row[6] . "</td>";
                echo '<td>' . $row[7] . "</td>";
                echo '<td>' . $row[8] . "</td>";
                echo '<td><a href="f_p_eliminar.php?run=' . $row[0] . '"> Eliminar </a></td>';
                echo '<td><a href="mod_postulante.php?run=' . $row[0] . '"> Modificar </a></td>';
                echo '</tr>';
                fwrite($archivo, $row[0].";".$row[1].";".$row[2].";".$row[3].";".$row[4].";".$row[5].";".$row[6].";".$row[7].";".$row[8]." \n");
            }
            fclose($archivo);
            ?>
        </table>
        <a href="listado.csv">Exportar Excel</a>
        <a href="../lista_pdf_1.php">Exportar PDF</a>
        <a href=""></a>        
        
    </center>
    
    </body>
    </html>