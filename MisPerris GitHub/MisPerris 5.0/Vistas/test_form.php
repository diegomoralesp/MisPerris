<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registrarse - Mis Perris</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/hoja.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <!--llenado de datos ciudad-->
    <script>
        $(document).ready(function(event){
            $("#cboRegion").change(function(){
                var idregion=$("#cboRegion").val();
                //alert('cambio'+id_region);
                $.ajax({
                    url: "llenar_ciudad.php",
                    type: 'POST',
                    data: {idregion:idregion},
                    success: function(data){
                        $("#cboCiudad").html(data);
                    }
                });
            });
        });
    </script>
    <?php
    $cone3 = mysqli_connect("localhost", "root", "", "misperris");
    $reg3 = mysqli_query($cone3, "select * from region");
    ?>
    <!--llenado de tipo de vivieda-->
    <script>
            $(document).ready(function(event){
                $("#cboTipo").change(function(){
                    var id_tipo=$("#cboTipo").val();
                    //alert('cambio'+id_region);
                    $.ajax({
                        url: "llenar_vivienda.php",
                        type: 'POST',
                        data: {id_tipo:id_tipo},
                        success: function(data){
                            $("#cboTipo").html(data);
                        }
                    });
                });
            });
    </script>
    <?php
    $cone = mysqli_connect("localhost", "root", "", "misperris");
    $reg = mysqli_query($cone, "select * from tipo_vivienda");
    ?>
    
    
    <center>
        <div class="barra">
            <img style="width: 200px; position: relative; right: 470px; top: 5px" src="img/logo.png" alt="">
            <a href="../Inicio.php" class="letra" style="text-decoration: none; position: relative; top: -10px; right: 150px;" >Inicio</a>
            <a href="gestion_postulantes.php" class="letra" style="text-decoration: none; position: relative; top: -10px; right: 75px;" >Atrás</a>
        </div>
        
        <form method="POST" action="f_p_grabar.php">
            <table border="1" class="table">
                <h1>Registrarse como Postulante de Fundación Mis Perris</h1>
                <tbody>
                    <tr>
                        <td>RUN:</td>
                        <td>
                            <input type="text" name="txtRun" maxlength="10"/> 
                        </td>
                    </tr>
                    <tr>
                        <td>Nombre Completo:</td>
                        <td>
                            <input type="text" name="txtNombre"/>
                        </td>
                    </tr>
                    <tr>
                        <td>Fecha Nacimiento:</td>
                        <td>
                            <input type="date" name="date" max="2001-09-14"/>
                        </td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td>
                            <input type="email" name="txtEmail"/>
                        </td>
                    </tr>
                    <tr>
                        <td>Teléfono:</td>
                        <td>
                            <input type="number" minlength="9" maxlength="9" min="900000000" max="999999999" name="txtFono"/>
                        </td>
                    </tr>
                    <tr>
                        <td>Género:</td>
                        <td>
                            <SELECT NAME="cboSexo" id="cboSexo"> 
                                <OPTION VALUE="Femenino">Femenino</OPTION>
                                <OPTION VALUE="Masculino">Masculino</OPTION>
                                <OPTION VALUE="Hombre Lobo">Hombre Lobo</OPTION>
                                <OPTION VALUE="Mujer Loba">Mujer Loba</OPTION>
                            </SELECT> 
                        </td>
                    </tr>
                    <tr>
                        <td>Dirección:</td>
                        <td>
                            <input type="text" name="txtDir" maxlength="100"/>
                        </td>
                    </tr>
                    <tr>
                    <td>Region:</td>
                    <td>
                        <select name="cboRegion" id="cboRegion">
                            <?php
                            while ($row3 = mysqli_fetch_array($reg3)) {
                                echo '<option value="'.$row3[0].'">'.$row3[1].'</option>';    
                            }
                            ?>
                        </select>
                    </td>
                    </tr>
                    <tr>
                        <td>Ciudades:</td>
                        <td>
                            <select name="cboCiudad" id="cboCiudad"></select>
                        </td>
                    </tr>
                    <tr>
                    <td>Tipo de Vivienda:</td>
                    <td>
                        <select name="cboTipo" id="cboTipo">
                            <?php
                            while ($row = mysqli_fetch_array($reg)) {
                                echo '<option value="'.$row[0].'">'.$row[1].'</option>';    
                            }
                            ?>
                        </select>
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