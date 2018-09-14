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
<body>
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
    
    <div class="container">
        <h2>Registrarse como Postulante de Fundación Mis Perris</h2>
        <form class="form-horizontal" method="POST" action="f_p_grabar.php">
            <div class="form-group">
                <label class="control-label col-sm-2" >R.U.N. :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="txtRun" 
                                placeholder="Ingrese su RUN sin puntos sólo con guión"
                                maxlength="10" >
                    </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Nombre Completo :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="txtNombre" 
                                placeholder="Ingrese su nombre completo">
                    </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Fecha de Nacimiento :</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="date" max="2001-09-14">
                    </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" >Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="txtEmail" 
                                placeholder="Ingrese correo electrónico" >
                    </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Teléfono:</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="txtFono" 
                               placeholder="Ingrese número telefónico" 
                               minlength="9" maxlength="9" min="900000000" max="999999999" >
                    </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Género :</label>
                    <div class="col-sm-10">
                        <select name="cboSexo" class="form-control" > 
                            <option value="Femenino">Femenino</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Hombre Lobo">Hombre Lobo</option>                  
                            <option value="Mujer Loba">Mujer Loba</option>                  
                        </select> 
                    </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" >Dirección :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="txtDir" 
                                placeholder="Ingrese su Dirección de Domicilio">
                    </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Región :</label>
                    <div class="col-sm-10">
                        <select name="cboRegion" class="form-control" > 
                            <?php
                            while ($row3 = mysqli_fetch_array($reg3)) {
                                echo '<option value="'.$row3[0].'">'.$row3[1].'</option>';    
                            }
                            ?>
                        </select> 
                    </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" >Ciudad :</label>
                    <div class="col-sm-10">
                        
                        <!-- 1 
                        <select name="cboCiudad" id="cboCiudad"></select>
                        -->
                        <!-- 2 -->
                        <SELECT NAME="cboSexo" id="cboSexo"> 
                            <OPTION VALUE="La Calera">La Calera</OPTION>
                            <OPTION VALUE="Cartajena">Cartajena</OPTION>
                            <OPTION VALUE="San Antonio">San Antonio</OPTION>
                            <OPTION VALUE="Quillota">Quillota</OPTION>
                            <OPTION VALUE="Viña del Mar">Viña del Mar</OPTION>
                            <OPTION VALUE="Macul">Macul</OPTION>
                            <OPTION VALUE="Las Condes">Las Condes</OPTION>
                            <OPTION VALUE="Maipu">Maipu</OPTION>
                            <OPTION VALUE="La Florida">La Florida</OPTION>
                            <OPTION VALUE="Puente Alto">Puente Alto</OPTION>
                            <OPTION VALUE="Dubai">Dubai</OPTION>
                        </SELECT>                     
                        
                    </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Tipo de Vivienda :</label>
                    <div class="col-sm-10">
                        <select name="cboTipo" id="cboTipo">
                            <?php
                            while ($row = mysqli_fetch_array($reg)) {
                                echo '<option value="'.$row[0].'">'.$row[1].'</option>';    
                            }
                            ?>
                        </select>
                    </div>
            </div>
            <div class="form-group">        
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Registrarse</button>
                    <button type="reset" class="btn btn-default">Limpiar Campos</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>