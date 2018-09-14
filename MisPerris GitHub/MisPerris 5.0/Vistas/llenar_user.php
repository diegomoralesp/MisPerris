 <?php
$run=$_POST["run"];
$cone= mysqli_connect("localhost", "root", "", "misperris");
$reg= mysqli_query($cone, "select run from postulante where run=$run");
?>
<option value="0">Seleccione</option>
<?php
while ($row = mysqli_fetch_array($reg)) {
    echo '<option value="'.$row[0].'"></option>';
}
?>

