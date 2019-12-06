<?php
include("conexion.php");
?>
<input type="submit" name="turnos" id="volver_turnos" value="Ver turnos">
<br>
<br>
<p><label>Escriba el apellido:</label><br>
<input type="text" id="pacientes"></p>

<div class="listado" id="listado" style="display:none; border: solid 1px #ccc; width: 300px">

</div>
<br>
<br>
<div class="ver_pacientes" id="ver_pacientes">
<table border="1">
  <tr>
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

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $("#pacientes").keyup(function(){
      var pacientes = $("#pacientes").val();
      alert(pacientes);
      if (pacientes.length > 1) {
        $("#listado").show();
        .get("busca_pacientes.php",{busca:pacientes}, function(respuesta){
          $("#listado").html(respuesta);
        });
      } else {
        $("#listado").hide();
      }
    });


    $("#volver_turnos").on("click",function(){
      $.ajax({
        type: "POST",
        url: "ver_turnos.php",
        success: function(response){
          $("#container").html(response);
        }
      });
    });

  });
</script>
