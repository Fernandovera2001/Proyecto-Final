<div class="" style="width: 1000px;">
  <table border="1">
  <tr>
    <td>Apellido</td>
    <td>Nombre</td>
    <td>Email</td>
    <td>Ver Historial Clinico</td>
    <td>Eliminar Historial Clinico</td>
  </tr>

<?php
include("conexion.php");
include("seguridad.php");
$busca = $_GET['busca'];
$query = mysqli_query($conexion, "SELECT * FROM login WHERE tipo='paciente' AND apellido LIKE '%".$busca."%'");
while ($data = mysqli_fetch_array($query)) {
?>
    <tr>
      <td><?php echo $data['apellido']?></td>
      <td><?php echo $data['nombre']; ?></td>
      <td><?php echo $data['email']; ?></td>
      <td><a href="Historial_clinico.php?id=<?php echo $data['id_login']; ?>">Ver historial clinico</a></td>
      <td><a href="eliminar_historial.php?id=<?php echo $data['id_login'];?>">Eliminar historial clinico</a></td>
    </tr>

  <?php
}
?>
  </table>
</div>
