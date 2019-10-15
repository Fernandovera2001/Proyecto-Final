<?php
include("conexion.php");
$titulo = $_POST['titulo'];
$fecha = $_POST['fecha'];
$horario = $_POST['horario'];

$result = mysqli_query($conexion, "INSERT INTO turnos (titulo, fecha, hora) VALUES ('$titulo', '$fecha', '$horario')");
header ("location:ver_turnos.php");



 ?>
