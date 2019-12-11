<?php
include("conexion.php");
$id = $_GET['id'];
$fecha = $_POST['fecha_consulta'];
$historial = $_POST['historial'];

$sql = "SELECT nombre, apellido FROM login WHERE id='$id'";
$resultado = mysqli_query($conexion, $sql);
while ($ver = mysqli_fetch_array($resultado)) {
?>
<head>
  <script src="https://kit.fontawesome.com/9305e722fd.js" crossorigin="anonymous"></script>

  <style>
.form{
  width: 900px;
  padding: 15px 20px;
  margin: 1px 0;
  box-sizing: border-box;
  border: none;
  background-color: #3CBC8D;
  color: white;
    }

.formulario{
  text-align: center;
}
.flecha{
  font-size: 50px;
  text-decoration: none;
  color: #FF6961;
}

.icon{
  font-size: 30px;
}
  </style>
</head>
<a class="flecha" href="interfaz_medic.php"><i class="fas fa-arrow-circle-left"></i></a>
<form class="formulario" action="registrar_historial.php" method="post">
  <i class="fas fa-user-circle icon"></i><br>Nombre<p><input type="text" name="nombre" class="form" value="<?php echo $ver['nombre']; ?>" readonly></p>
  <i class="fas fa-user-circle icon"></i><br>Apellido<p><input type="text" name="nombre" class="form" value="<?php echo $ver['apellido']; ?>" readonly></p>
  <i class="fas fa-calendar-alt icon"></i><br>Fecha de la consulta<p><input type="date" class="form" name="fecha_consulta"></p>
  <i class="fas fa-address-book icon"></i><br>Historial<p><textarea name="historial" rows="8" cols="80" class="form"></textarea></p>
  <input type="text" name="id" value="<?php echo $id; ?>" hidden="true">
  <button type="submit" class="form" name="subir_historial">Subir Consulta</button>
</form>
<?php } ?>
