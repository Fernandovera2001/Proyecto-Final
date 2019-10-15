<div class="tab-content pl-md-5" id="v-pills-tabContent">
  <input type="submit" name="turnos" id="btn_turnos" value="Turnos">
  <input type="submit" name="pacientes" id="btn_pacientes" value="Pacientes">
  <input type="submit" name="pacientes" id="btn_volver" value="Volver">
</div>
<br>

<div class="">


<table border="1">
  <tr>
    <td>Titulo</td>
    <td>Fecha</td>
    <td>Hora</td>
  </tr>

  <?php
  include("conexion.php");
  $sql = "SELECT titulo, fecha, hora FROM turnos";
  $result = mysqli_query($conexion, $sql);

  while ($mostrar = mysqli_fetch_array($result)) {
   ?>
  <tr>
    <td><?php echo $mostrar['titulo']; ?></td>
    <td><?php echo $mostrar['fecha']; ?></td>
    <td><?php echo $mostrar['hora']; ?></td>
  </tr>
  <?php
}
   ?>
</table>
</div>
