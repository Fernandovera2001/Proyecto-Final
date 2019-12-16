<?php
include("seguridad.php");
include("conexion.php");

$email = $_POST['email'];
$password = $_POST['password'];
$newpassword = $_POST['newpassword'];
$confirmnewpassword = $_POST['confirmnewpassword'];

$query = mysqli_query($conexion, "SELECT id FROM login WHERE email = '$email' and contrasenia = '$password'");
$result = mysqli_num_rows($query);
	if ($result == 0) {
		echo "Contraseña o mail no se encuentran registradas";
	}else {
    if ($newpassword == $confirmnewpassword) {
          $sql = mysqli_query($conexion, "UPDATE login SET contrasenia='$newpassword' WHERE email='$email'");
      }
  }

  if ($sql) {
    echo "Cambiaste la contraseña";
    header("location:interfaz_medic.php");
  }else {
    echo "No se pudo cambiar la contraseña";
  }
