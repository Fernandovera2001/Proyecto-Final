<?php
session_start();
include("conexion.php");

if (isset($_POST['entrar'])) {
	$usuario = $_POST['usuario'];
	$pass = $_POST["contrasenia"];
	$log = mysqli_query($conexion, "SELECT * FROM login WHERE usuario='$usuario' AND contrasenia='$pass'");
			if (mysqli_num_rows($consulta)>0) {
				$row = mysqli_fetch_array($log);
				$_SESSION["usuario"] = $row["usuario"];
				header("Location: index.php");
			}else {
				header("Location: login.php");
			}
}
