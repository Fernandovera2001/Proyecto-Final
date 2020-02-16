<?php
session_start();
include("seguridad.php");
$id = $_GET['id'];
include("conexion.php");

mysqli_query($conexion,"DELETE FROM `historial_clinico` WHERE `historial_clinico`.`id_pacientes` = '$id'");
header("location: interfaz_medic.php");

?>
