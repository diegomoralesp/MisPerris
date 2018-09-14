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
            <a href="gestion_mascotas.php" class="letra" style="text-decoration: none; position: relative; top: -10px; right: 75px;" >Atrás</a>
        </div>
        
        <form method="POST" action="f_m_grabar.php">
            <table border="1" class="table">
                <h1>Agregar una Mascota</h1>
                <tbody>
                    <tr>
                        <td>ID Mascota:</td>
                        <td>
                            <input type="number" name="txtID" min="0"/> 
                        </td>
                    </tr>
                    <tr>
                        <td>Fecha Ingreso:</td>
                        <td>
                            <input type="date" min="2010" name="date"/>
                        </td>
                    </tr>
                    <tr>
                        <td>Nombre:</td>
                        <td>
                            <input type="text" name="txtNombre"/>
                        </td>
                    </tr>
                    <tr>
                        <td>Edad:</td>
                        <td>
                            <input type="number" name="txtEdad" min="0" max="20"/>
                        </td>
                    </tr>
                    <tr>
                        <td>Raza:</td>
                        <td>
                            <input type="text" name="txtRaza"/>
                        </td>
                    </tr>
                    <tr>
                        <td>Observación:</td>
                        <td>
                            <input type="text" name="txtObs" maxlength="200"/>
                        </td>
                    </tr>
                    <tr>
                        <td>Sexo:</td>
                        <td>
                            <SELECT NAME="cboSexo" id="cboSexo"> 
                                <OPTION VALUE="Macho">Macho</OPTION>
                                <OPTION VALUE="Hembra">Hembra</OPTION>
                            </SELECT> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="Guardar" />
                            <input type="reset" value="Limpiar" />
                        </td>                        
                    </tr>
                </tbody>
            </table>
            
        </form>
        
        
        
    </center>
    
    </body>
    </html>