<?php
include("conexion.php");

if ($_POST['usuario']=="" or $_POST['clave']=="") {
  header("location:login.php");
}else {
  $usuario = $_POST['usuario'];
  $password = $_POST['password'];
  $query = mysqli_query($conexion, "SELECT * FROM login WHERE usuario='$usuario' and contrasenia='$password'");
  $n = mysqli_num_rows($query);
  if ($n == 0) {
    header("location:login.php");
  }else {
    session_start();
    $_SESSION['usuario'] = $usuario;
    $_SESSION['password'] = $password;
    header("location:index.php");
  }
}
exit();


/*
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
/*
