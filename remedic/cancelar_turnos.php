<?php
session_start();
include("seguridad.php");
$v1 = $_GET['id_turnos'];
include("conexion.php");

mysqli_query($conexion,"DELETE FROM `turnos` WHERE `turnos`.`id_turnos` = '$v1'");
header("location: interfaz_medic.php");

 ?>
