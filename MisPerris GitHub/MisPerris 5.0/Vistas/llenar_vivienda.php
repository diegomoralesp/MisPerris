<?php

$id_tipo=$_POST["id_tipo"];
$cone= mysqli_connect("localhost", "root", "", "misperris");
$reg= mysqli_query($cone, "select * from tipo_vivienda "
        . "where id_tipo=$id_tipo");
?>
<!--<option value="0">Seleccione</option>   -->
<?php
while ($row = mysqli_fetch_array($reg)) {
    echo '<option value="'.$row[0].'">'.$row[1].'</option>';
}
?>
