<?php
include("conexion.php");
if ($_POST['email']=="" or $_POST['clave']=="") {
	header("location: login.php");
}else{
	$email = $_POST['email'];
	$clave = $_POST['clave'];
	$query = mysqli_query($conexion, "SELECT id FROM login WHERE email = '$email' and contrasenia = '$clave'");
	$n = mysqli_num_rows($query);
		if ($n == 0) {
			header("location: login.php");
	}else{
		session_start();
		$_SESSION['email'] = $email;
		$_SESSION['autenticado'] = 'si';
		header("location: index.php");
	}
}
exit();
