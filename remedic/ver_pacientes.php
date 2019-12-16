
<?php
include("conexion.php");
?>
<input type="submit" name="turnos" id="volver_turnos" value="Ver turnos">
<br>
<br>
<p><label>Escriba el apellido:</label><br>
<input type="text" id="pacientes"></p>

<div class="listado" id="listado" style="display:none; width: 100px">

</div>
<br>
<br>
<div class="ver_pacientes" id="ver_pacientes">
<table border="1">
  <tr class="titulo">
    <td>Apellido</td>
    <td>Nombre</td>
    <td>Email</td>
    <td>Ver Historial Clinico</td>
    <td>Agregar Historial Clinico</td>
  </tr>

  <?php
  include("conexion.php");
  $sql = "SELECT * FROM login WHERE tipo='paciente' ORDER BY apellido ASC";
  $result = mysqli_query($conexion, $sql);


  while ($mostrar = mysqli_fetch_array($result)) {
   ?>
  <tr>
    <td><?php echo $mostrar['apellido']; ?></td>
    <td><?php echo $mostrar['nombre']; ?></td>
    <td><?php echo $mostrar['email']; ?></td>
    <td><a href="Historial_clinico.php?id=<?php echo $mostrar['id'];?>">Ver historial clinico</a></td>
    <td><a href="agregar_historial.php?id=<?php echo $mostrar['id'];?>">Agregar historial clinico</a></td>
  </tr>
  <?php
}
   ?>
</table>
</div>
