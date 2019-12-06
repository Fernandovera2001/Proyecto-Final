<?php
include("conexion.php");

$busca = $_GET['busca'];
$query = mysqli_query($conexion, "SELECT * FROM login WHERE nombre LIKE '%".$busca."%'");
while ($data = mysqli_fetch_array($query)) {
  echo '<div class="elemento">'.$data['nombre'].'</div>';
}
