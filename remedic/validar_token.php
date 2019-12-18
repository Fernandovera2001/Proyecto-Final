<?php
include("conexion.php");

$mail = $_POST['email'];
$token = $_POST['token'];
$newpssw = $_POST['newpssw'];

$query = mysqli_query($conexion, "SELECT id FROM login WHERE email = '$mail' and token = '$token'");
$result = mysqli_num_rows($query);
	if ($result == 0) {
		echo '<script type="text/javascript">
		alert("token o mail no coinciden");
		window.location.href="confirmar_pass.php";
		</script>';
	}else {
    $sql = mysqli_query($conexion, "UPDATE login SET contrasenia='$newpssw' WHERE email='$mail'");
		echo '<script type="text/javascript">
		alert("Su contraseña se cambio bien");
		window.location.href="login.php";
		</script>';

		$sqli = mysqli_query($conexion, "UPDATE login SET token='' WHERE email='$mail'");

  }

 ?>
