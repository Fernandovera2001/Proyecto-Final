<?php
include("conexion.php");
$fecha = $_POST['fecha_consulta'];
$historial = $_POST['historial'];
$id = $_POST['id'];

$result = mysqli_query($conexion, "INSERT INTO historial_clinico (id_pacientes, fecha_consulta, historial) VALUES ('$id', '$fecha', '$historial')");
header("location:interfaz_medic.php");
 ?>
