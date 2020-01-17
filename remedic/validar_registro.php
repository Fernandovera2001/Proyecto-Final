<?php
include("conexion.php");
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['gmail'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$dni = $_POST['dni'];
$generos = $_POST['generos'];
$obra_social = $_POST['obra_social'];
$clave = $_POST['clave'];



$query = mysqli_query($conexion, "SELECT id FROM login WHERE email = '$email'");
$n = mysqli_num_rows($query);
    if ($n == 1) {
      echo '<script type="text/javascript">
  		alert("el mail ya se encuentra registrado");
  		window.location.href="login.php";
  		</script>';
  }else {
    mysqli_query($conexion, "INSERT INTO login (nombre, apellido, email, fecha_nacimiento, dni, genero, obra_social, contrasenia) VALUES ('$nombre', '$apellido' ,'$email', '$fecha_nacimiento', '$dni', '$generos', '$obra_social', '$clave')");
echo "hola";
    header("login.php");
  }
exit();
