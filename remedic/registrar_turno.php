<?php
session_start();
include("conexion.php");
$titulo = $_POST['titulo'];
$fecha = $_POST['fecha'];
$horario = $_POST['horario'];

$result = mysqli_query($conexion, "INSERT INTO turnos (id_pacientes, titulo, fecha, hora) VALUES ('$_SESSION[id]','$titulo', '$fecha', '$horario')");
header("location:index.php");
 ?>
