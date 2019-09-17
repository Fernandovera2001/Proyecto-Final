<?php
include("conexion.php");
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['gmail'];
$clave = $_POST['clave'];



$query = mysqli_query($conexion, "SELECT id FROM login WHERE email = '$email'");
$n = mysqli_num_rows($query);
  if ($n == 1) {
    echo "El mail ya esta en uso";
  }else {
    mysqli_query($conexion, "INSERT INTO login (nombre, apellido, email, contrasenia) VALUES ('$nombre', '$apellido' ,'$email', '$clave')");
    header("login.php");
  }
exit();
