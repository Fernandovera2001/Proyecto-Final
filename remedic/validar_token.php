<?php
include("./conexion.php");

$mail = $_POST['email'];
$token = $_POST['token'];
$newpssw = $_POST['newpssw'];

$query = mysqli_query($conexion, "SELECT id FROM login WHERE email = '$mail' and token = '$token'");
$result = mysqli_num_rows($query);
	if ($result == 0) {
		echo "token o mail no coincidan";
	}else {
    $sql = mysqli_query($conexion, "UPDATE login SET contrasenia='$newpssw' WHERE email='$mail'");
    echo "Su contraseña se cambio bien";
    ?><br>
    <a href="login.php">Volver a Login</a>
    <?php
  }

 ?>
