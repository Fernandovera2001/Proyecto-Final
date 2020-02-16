<?php
include("seguridad.php");
 ?>
<a class="flecha" href="interfaz_medic.php"><i class="fas fa-arrow-circle-left"></i></a>
<head>
  <script src="https://kit.fontawesome.com/9305e722fd.js" crossorigin="anonymous"></script>
</head>

<?php
include("conexion.php");
$id = $_GET['id'];

$sql = "SELECT * FROM historial_clinico INNER JOIN login ON historial_clinico.id_pacientes = login.id WHERE historial_clinico.id_pacientes='$id'";
$resultado = mysqli_query($conexion, $sql);

$sqli = "SELECT * FROM login WHERE id ='$id'";
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
      <th><i class="fas fa-address-book icon"></i></th>
    </tr>
    <br>
    <?php while ($ver = mysqli_fetch_array($resultado)) {
     ?>
    <tr>
      <th><?php echo $ver['fecha_consulta']; ?></th>
      <th><?php echo $ver['historial']; ?></th>
    </tr>
    <?php
  }
   ?>
  </table>
  </div>


  <style>
  .datos{
    padding: 15px 20px;
    margin: 1px 0;
    box-sizing: border-box;
    border: none;
    background-color: #3CBC8D;
    color: white;
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
