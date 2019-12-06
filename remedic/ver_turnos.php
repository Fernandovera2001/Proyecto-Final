<input type="submit" name="pacientes" id="btn_pacientes" value="Pacientes">
<br>
<br>
<div class="turnos_pacientes">
<table border="1">
  <tr>
    <td>Nombre</td>
    <td>Apellido</td>
    <td>Email</td>
    <td>Titulo</td>
    <td>Fecha</td>
    <td>Hora</td>
  </tr>

  <?php
  include("conexion.php");
  $sql = "SELECT * FROM turnos INNER JOIN login ON turnos.id_pacientes = login.id";
  $result = mysqli_query($conexion, $sql);

  while ($mostrar = mysqli_fetch_array($result)) {
   ?>
  <tr>
    <td><?php echo $mostrar['nombre']; ?></td>
    <td><?php echo $mostrar['apellido']; ?></td>
    <td><?php echo $mostrar['email']; ?></td>
    <td><?php echo $mostrar['titulo']; ?></td>
    <td><?php echo $mostrar['fecha']; ?></td>
    <td><?php echo $mostrar['hora']; ?></td>
  </tr>
  <?php
}
   ?>
</table>
</div>
