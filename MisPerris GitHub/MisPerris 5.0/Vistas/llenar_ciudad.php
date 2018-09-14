 <?php
$idregion=$_POST["idregion"];
$cone3= mysqli_connect("localhost", "root", "", "misperris");
$reg3= mysqli_query($cone3, "select * from ciudad "
        . "where region_idregion=$idregion");
?>
<option value="0">Seleccione</option>
<?php
while ($row3 = mysqli_fetch_array($reg3)) {
    echo '<option value="'.$row3[0].'">'.$row3[1].'</option>';
}
?>

