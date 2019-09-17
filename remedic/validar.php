<?php
include("conexion.php");

$email = $_POST['email'];
$clave = $_POST['clave'];

$query = mysqli_query($conexion, "SELECT id, tipo FROM login WHERE  email = '$email' and contrasenia = '$clave'");

$result = mysqli_num_rows($query);
	if ($result == 0) {
		header("location: login.php");
	}else {
		$row = mysqli_fetch_array($query);
			$tipo = $row['tipo'];
			session_start();
			$_SESSION['email'] = $email;
			$_SESSION['autenticado'] = 'si';

			if ($tipo == 'doctor') {
				header("location: interfaz_medic.php");
			}else {
				header("location: index.php");
		}
	}

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
