<?php
include("conexion.php");
$id = $_GET['id'];

$sql = "SELECT * FROM historial_clinico INNER JOIN login ON historial_clinico.id_pacientes = login.id WHERE historial_clinico.id_pacientes='$id'";
// $sql = "SELECT nombre, apellido, email, fecha_nacimiento, dni, genero, obra_social FROM login WHERE id=$id";
$resultado = mysqli_query($conexion, $sql);
while ($ver = mysqli_fetch_array($resultado)) {
  ?>
  <table class="datos" border="1" bordercolor="black">
    <tr>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Fecha</th>
      <th>Historial</th>
    </tr>
    <br>
    <tr>
      <th><?php echo $ver['nombre'];?></th>
      <th><?php echo $ver['apellido']; ?></th>
      <th><?php echo $ver['fecha_consulta']; ?></th>
      <th><?php echo $ver['historial']; ?></th>
    </tr>
  </table>
  <?php
}
 ?>
 <br>
<a href="interfaz_medic.php">Volver</a>
