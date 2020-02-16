<?php
include("conexion.php");
include("seguridad.php");

$email = $_POST['email'];
$clave = $_POST['clave'];

$query = mysqli_query($conexion, "SELECT id, tipo FROM login WHERE  email = '$email' and contrasenia = '$clave'");
$result = mysqli_num_rows($query);
	if ($result == 0) {
		echo '<script type="text/javascript">
		alert("Mail o contraseña incorrectos");
		window.location.href="login.php";
		</script>';
	}else {
		$row = mysqli_fetch_array($query);
			$tipo = $row['tipo'];
			$id = $row['id'];
			session_start();
			$_SESSION['email'] = $email;
			$_SESSION['id'] = $id;
			$_SESSION['autenticado'] = 'si';

			if ($tipo == 'doctor') {
				header("location: interfaz_medic.php");
			}else {
				header("location: index.php");
		}
	}
