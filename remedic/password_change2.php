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
		echo '<script type="text/javascript">
		alert("Contraseña o mail no se encuentran registrados");
		window.location.href="cambiar_contrasenia_user.php";
		</script>';
	}else {
    if ($newpassword == $confirmnewpassword) {
          $sql = mysqli_query($conexion, "UPDATE login SET contrasenia='$newpassword' WHERE email='$email'");
      }else {
				echo '<script type="text/javascript">
				alert("Contraseña son diferentes");
				window.location.href="cambiar_contrasenia_user.php";
				</script>';
			}
  }

  if ($sql) {
		echo '<script type="text/javascript">
		alert("Su contraseña se cambio bien");
		window.location.href="index.php";
		</script>';
  }
