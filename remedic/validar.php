<?php
session_start();
ob_start();

if (isset($_POST['entrar'])){ //Verifico que el boton "Iniciar Sesion" fue oprimido
	$_SESSION['sesion_exito']=0;

	$usuario = $_POST['usuario'];
	$password = $_POST['password'];

	if ($usuario == "" || $password== "") {
		$_SESSION['sesion_exito']=2; //2 sera error de campos vacios.
	}else {
		$_SESSION['sesion_exito']=3; //3 DATOS INCORRECTOS
		$resultados = mysqli_query($conexion, "SELECT * FROM login WHERE usuario = '$usuario' AND contrasenia = '$password'");

		while ($consulta = mysqli_fetch_array($resultados)) {
			$_SESSION['sesion_exito']=1;//1 Inicio sesion
		}
		include("cerrar_conexion.php");
	}
}

if ($_SESSION['sesion_exito']!=1) {
	header("Location: login.php");
}
//video https://www.youtube.com/watch?v=NRB7Eppn8kc
