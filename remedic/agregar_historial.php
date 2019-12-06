<?php
include("conexion.php");
$id = $_GET['id'];
$fecha = $_POST['fecha_consulta'];
$historial = $_POST['historial'];

$sql = "SELECT nombre, apellido FROM login WHERE id='$id'";
$resultado = mysqli_query($conexion, $sql);
while ($ver = mysqli_fetch_array($resultado)) {
?>
<form class="" action="agregar_historial.php" method="post">
  <p>Nombre: <input type="text" name="nombre" value="<?php echo $ver['nombre']; ?>" readonly></p>
  <p>Apellido: <input type="text" name="nombre" value="<?php echo $ver['apellido']; ?>" readonly></p>
  <p>Fecha de la consulta: <input type="date" name="fecha_consulta"></p>
  <p>Historial: <input type="text" name="historial"></p>
  <button type="submit" name="subir_historial">Subir Consulta</button>
</form>
<?php } ?>
