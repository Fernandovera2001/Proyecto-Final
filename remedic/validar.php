<?php
include("conexion.php");
if ($_POST['usuario']=="" or $_POST['clave']=="") {
	header("location: login.php");
}else{
	$usuario = $_POST['usuario'];
	$clave = $_POST['clave'];
	$query = mysqli_query($conexion, "SELECT id FROM login WHERE usuario = '$usuario' and contrasenia = '$clave'");
	$n = mysqli_num_rows($query);
		if ($n == 0) {
			header("location: login.php");
	}else{
		session_start();
		$_SESSION['usuario'] = $usuario;
		$_SESSION['autenticado'] = 'si';
		header("location: index.php");
	}
}
exit();
