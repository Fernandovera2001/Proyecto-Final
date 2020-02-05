<?php
session_start();
include("seguridad.php");
$id = $_GET['id_turnos'];
include("conexion.php");

mysqli_query($conexion, "DELETE FROM `turnos` WHERE `turnos`.`id_turnos` = '$id'");
header("location: interfaz_medic.php");
 ?>
