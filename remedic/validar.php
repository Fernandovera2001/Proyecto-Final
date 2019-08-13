<?php
session_start(); // Iniciando sesion
if (isset($_POST['submit'])) {
if (empty($_POST['usuario']) || empty($_POST['clave'])) {
$error = "Usuario o contraseña invalidos";
}else{
// Define $username y $password
$username=$_POST['usuario'];
$password=$_POST['clave'];
// Estableciendo la conexion a la base de datos
include("db.php");//Contienen las variables, el servidor, usuario, contraseña y nombre  de la base de datos
include("conexion.php");//Contiene de conexion a la base de datos

// Para proteger de Inyecciones SQL
$username = mysqli_real_escape_string($conexion,(strip_tags($username,ENT_QUOTES)));
$password =  sha1($password);//Algoritmo de encriptacion de la contraseña http://php.net/manual/es/function.sha1.php

$sql = "SELECT usuario, contrasenia FROM login WHERE usuario = '" . $username . "' and contrasenia='".$password."';";
$query=mysqli_query($conexion,$sql);
$counter=mysqli_num_rows($query);
if ($counter==1){
		$_SESSION['login_user_sys']=$username; // Iniciando la sesion
		header("location: index.php");
} else {
$error = "El usuario o la contraseña es inválida.";
      }
    }
}


/*include("conexion.php");
if ($_POST['usuario']=="" or $_POST['clave']=="") {
	header("location: login.php");
}else{
	$usuario = $_POST['usuario'];
	$clave = $_POST['clave'];
	$query = mysqli_query($conexion, "SELECT id FROM login WHERE usuario = '$usuario' and usuario_clave = '$clave'");
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
*/
