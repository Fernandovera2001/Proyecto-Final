<?php
session_start();
include("seguridad.php");
$id = $_GET['id_cancelar'];
include("conexion.php");

mysqli_query($conexion,"DELETE FROM `turnos` WHERE `turnos`.`id_turnos` = '$id'");
// mysqli_query($conexion,"DELETE FROM `turnos` WHERE `turnos`.`id_turnos` = '".$_SESSION['id']."'");

header("location: ver_turno.php");
 ?>
