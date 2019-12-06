<?php
include("conexion.php");
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['gmail'];
$fecha_nacimiento = ['fecha_nacimiento'];
$dni = $_POST['dni'];
$generos = $_POST['generos'];
$obra_social = $_POST['obra_social'];
$clave = $_POST['clave'];



$query = mysqli_query($conexion, "SELECT id FROM login WHERE email = '$email'");
$n = mysqli_num_rows($query);
  if ($n == 1) {
    echo "El mail ya esta en uso";
  }else {
    mysqli_query($conexion, "INSERT INTO login (nombre, apellido, email, fecha_nacimiento, dni, genero, obra_social, contrasenia) VALUES ('$nombre', '$apellido' ,'$email', '$fecha_nacimiento', '$dni', '$generos', '$obra_social', '$clave')");
    header("login.php");
  }
exit();
