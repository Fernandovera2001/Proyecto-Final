<table>
  <tr>
    <td>Apellido</td>
    <td>Nombre</td>
    <td>Email</td>
    <td>Ver Historial Clinico</td>
    <td>Agregar Historial Clinico</td>
  </tr>
<?php
include("conexion.php");
$busca = $_GET['busca'];
$query = mysqli_query($conexion, "SELECT * FROM login WHERE tipo='paciente' AND nombre LIKE '%".$busca."%'");
while ($data = mysqli_fetch_array($query)) {
echo '
    <tr>
      <td>'.$data['apellido'].'</td>
      <td>'.$data['nombre'].'</td>
      <td>'.$data['email'].'</td>
      <td><a href="Historial_clinico.php?id='.$data['id'].'">Ver historial clinico</a></td>
      <td><a href="agregar_historial.php?id='.$data['id'].'">Agregar historial clinico</a></td>
    </tr>
  </table>';
}
?>
