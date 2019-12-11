<?php
  include("conexion.php");
  $random = rand(1,1000);
  $ecnriptado = md5($random);
  $resultado = myslqi_query($conexion, "SELECT INTO login (token) VALUES ('$ecnriptado')");

  $mail = $_POST['mail'];
  $query = mysqli_query($conexion, "SELECT email FROM login WHERE  email = '$mail'");
  $result = mysqli_num_rows($query);
    if ($result == 0) {
      header("location: recuperar_pass.php");
      echo "El mail no se encuentra en la base de datos";
    }else {
      $query = mysqli_query($conexion, "SELECT email, token FROM login WHERE  email = '$mail'");
      $row = mysqli_fetch_array($query);

      $para = $mail;
      $titulo = "Tu password";
      $mensaje = "Tu contraseña es ".$row['token']." Ingrese a este link http://localhost/6toanio/proyecto_final/remedic/confirmar_pass.php";
      mail($para, $titulo, $mensaje);
    }

?>
