<?php
session_start();
ob_start();

$_SESSION['sesion_exito']=0;

$usuario = $_POST['usuario'];
$password = $_POST['password'];

if ($user == "" || $pass== "") {
	$_SESSION
	header("Location:login.php");
}

//video https://www.youtube.com/watch?v=NRB7Eppn8kc
