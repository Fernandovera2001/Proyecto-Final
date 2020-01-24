<?php
session_start();
$id = $_GET['id'];
include("conexion.php");

mysqli_query($conexion,"DELETE FROM `turnos` WHERE `turnos`.`id_pacientes` = '$id'");
header("location: interfaz_medic.php");
 ?>
