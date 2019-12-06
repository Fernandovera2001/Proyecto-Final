<?php
include("conexion.php");
$fecha_consulta = $_POST['fech_consulta'];
$historial = $_POST['historia_clinico'];
$id = $_GET['id'];

$result = mysqli_query($conexion, "INSERT INTO historial_clinico (id_pacientes, fecha_consulta, historial) VALUES ('$id', '$fecha_consulta', '$historial')");
header("location:interfaz_medic.php");
 ?>
