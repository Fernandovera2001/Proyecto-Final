<link rel="stylesheet" href="style.css">
<div class="tab-content pl-md-5" id="v-pills-tabContent">
  <input type="submit" name="turnos" id="btn_turnos" value="Turnos">
  <input type="submit" name="pacientes" id="btn_pacientes" value="Pacientes">
  <input type="submit" name="pacientes" id="btn_volver" value="Volver">
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

  //$resultado = mysqli_query($conexion, "SELECT nombre FROM login WHERE email = '$email'");
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
</div>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $("#btn_pacientes").on("click",function(){
      $.ajax({
        type: "POST",
        url: "ver_pacientes.php",
        success: function(response){
          $("#container").html(response);
        }
      });
    });
  });
</script>
