<?php
session_start();
include("conexion.php");
include("seguridad.php");

$id_cita = $_GET['id'];

mysqli_query($conexion, "DELETE FROM `historial_clinico` WHERE `historial_clinico`.`id` = '$id_cita'");
header("location:interfaz_medic.php");

 ?>
