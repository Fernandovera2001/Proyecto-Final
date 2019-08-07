<?php
// datos para la coneccion a mysql
$hostdb= "localhost";
$userdb= "root";
$passdb= "23062001";
$db= "hospital";

//Realizamos la conexion
$conexion = mysqli_connect($hostdb,$userdb,$passdb,$db);

//Estructura de control por si falla
if(!$conexion)
{
die("No he podido conectar porque: ".mysql_error());
}
?>
