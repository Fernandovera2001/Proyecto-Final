<?php
include("conexion.php");
if ($_POST['nombre'] == "") {
  echo "Debe colocar el nombre";
}else {
  $nombre = $_POST['nombre'];
}

if ($_POST['apellido'] == "") {
  echo "Debe colocar el apellido";
}else {
  $apellido = $_POST['apellido'];
}

if ($_POST['email'] == "") {
  echo "Debe colocar el email";
}else {
  $email = $_POST['email'];
}

if ($_POST['clave'] == "") {
  echo "Debe colocar la clave";
}else {
  $clave = $_POST['clave'];
}

if ($_POST['clave'] != $_POST['clave1']) {
  echo "Las claves son distintas";
}

$query = mysqli_query($conexion, "SELECT id FROM login WHERE email = '$email'");
$n = mysqli_num_rows($query);
  if (mysqli_num_rows($query) < 0) {
    echo "El mail ya esta en uso";
  }else {
    mysqli_query($conexion, "INSERT INTO login (nombre, apellido, email, contrasenia) VALUES ('$nombre'),('$apellido'),('$email'),('$clave')");
    header("login.php");
  }


// include("conexion.php");
// if ($_POST['email']=="" or $_POST['clave']=="") {
// 	header("location: login.php");
// }else{
// 	$email = $_POST['email'];
// 	$clave = $_POST['clave'];
// 	$query = mysqli_query($conexion, "SELECT id FROM login WHERE email = '$email' and contrasenia = '$clave'");
// 	$n = mysqli_num_rows($query);
// 		if ($n == 0) {
// 			header("location: login.php");
// 	}else{
// 		session_start();
// 		$_SESSION['email'] = $email;
// 		$_SESSION['autenticado'] = 'si';
// 		header("location: index.php");
// 	}
// }
// exit();
