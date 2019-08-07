<?php
include("conexion.php");
$titulo = $_POST['titulo'];
$fecha = $_POST['fecha'];
$horario = $_POST['horario'];


if (empty($fecha) || empty ($horario)) {
  header ("location:index.php"); //Provisorio, hasta que haga una interfaz para ver los turnos
}
else {
  $result = mysqli_query($conexion, "INSERT INTO turnos (titulo, fecha, hora) VALUES ('$titulo', '$fecha', '$horario')");
  header ("location:ver_turnos.php");
}



 ?>
