<?php
session_start();
include("conexion.php");
include("seguridad.php");

$titulo = $_POST['titulo'];
$fecha = $_POST['fecha'];
$horario = $_POST['horario'];


$query = mysqli_query($conexion, "SELECT id_turnos FROM turnos WHERE fecha = '$fecha' and hora = '$horario'");
$resultados  = mysqli_num_rows($query);
  if ($resultados != 0) {
    echo '<script type="text/javascript">
		alert("fecha u horarios ocupados");
		window.location.href="index.php";
		</script>';
  }else {
    $result = mysqli_query($conexion, "INSERT INTO turnos (id_pacientes, titulo, fecha, hora) VALUES ('$_SESSION[id]','$titulo', '$fecha', '$horario')");
    echo '<script type="text/javascript">
		alert("Se registro bien fecha y horario");
		window.location.href="index.php";
		</script>';
  }

 ?>
