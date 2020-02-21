<a class="flecha" href="interfaz_medic.php"><i class="fas fa-arrow-circle-left"></i></a>
<head>
  <script src="https://kit.fontawesome.com/9305e722fd.js" crossorigin="anonymous"></script>
</head>

<?php
include("conexion.php");
include("seguridad.php");
$id = $_GET['id'];

$sql = "SELECT * FROM historial_clinico INNER JOIN login ON historial_clinico.id_pacientes = login.id_login WHERE historial_clinico.id_pacientes='$id'";
$resultado = mysqli_query($conexion, $sql);

$sqli = "SELECT * FROM login WHERE id_login ='$id'";
$resulta2 = mysqli_query($conexion, $sqli);


while ($ver2 = mysqli_fetch_array($resulta2)) {
  $nombre = $ver2['nombre'];
  $apellido = $ver2['apellido'];
}
?>
  <h1 style="text-align:center;"><?php echo ucfirst($nombre);?>&nbsp<?php echo ucfirst ($apellido); ?></h1>
  <div style="text-align:center;">
  <table class="datos" border="1" bordercolor="black">
    <tr>
      <th><i class="fas fa-calendar-alt icon"></i></th>
      <th><i class="fas fa-user-circle icon"></i></th>
      <th><i class="fas fa-address-book icon"</th>

    </tr>
    <br>
    <?php while ($ver = mysqli_fetch_array($resultado)) {
     ?>
    <tr>
      <th><?php echo $ver['fecha_consulta']; ?></th>
      <th><?php echo $ver['historial']; ?></th>
      <th><a href="eliminar_cita.php?id=<?php echo $ver['id'];?>"><i class="fas fa-times-circle x"></i></a></th>

    <?php
  }
   ?>
       </tr>
  </table>
  </div>
<br><br>
  <?php
  $id = $_GET['id'];
  $fecha = $_POST['fecha_consulta'];
  $historial = $_POST['historial'];

  $sql = "SELECT nombre, apellido FROM login WHERE id_login='$id'";
  $resultado = mysqli_query($conexion, $sql);
  while ($ver = mysqli_fetch_array($resultado)) {
  ?>
  <head>
    <script src="https://kit.fontawesome.com/9305e722fd.js" crossorigin="anonymous"></script>

  </head>
  <form class="formulario" action="registrar_historial.php" method="post">
    <i class="fas fa-calendar-alt icon"></i><br>Fecha de la consulta<p><input type="date" class="form" name="fecha_consulta" required min="<?php date_default_timezone_set('America/Argentina/Buenos_Aires');
     echo date("Y-m-d",strtotime(date("Y-m-d")))  ?>"></p>
    <i class="fas fa-address-book icon"></i><br>Historial<p><textarea name="historial" rows="8" cols="80" class="form"></textarea></p>
    <input type="text" name="id" value="<?php echo $id; ?>" hidden="true">
    <button type="submit" class="form" name="subir_historial">Subir Consulta</button>
  </form>
  <?php } ?>

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
  .datos{
    padding: 15px 20px;
    margin: 1px 0;
    box-sizing: border-box;
    border: none;
    background-color: #3CBC8D;
    color: white;
  }

  .x{
    font-size: 30px;
    color: #FF6961;
  }

  td, th{
    width: 300px;
    height: 50px;
  }
  .datos{
    margin: 0 auto;
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
