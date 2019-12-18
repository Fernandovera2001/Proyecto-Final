<?php
  include("conexion.php");
  $mail = $_GET['mail'];

  $random = rand(1,1000);
  $encriptado = md5($random);

    $query = mysqli_query($conexion, "SELECT email FROM login WHERE  email = '$mail'");
    $result = mysqli_num_rows($query);
      if ($result == 0) {
        echo "El mail no se encuentra en la base";
        ?>
        <br>
        <a href="login.php">Volver</a>
        <?php
      }else {
        $resultado = mysqli_query($conexion,"UPDATE login SET token='$encriptado' WHERE email ='$mail'");
        $query = mysqli_query($conexion, "SELECT email, token FROM login WHERE  email = '$mail'");
        $row = mysqli_fetch_array($query);

        $para = $mail;
        $titulo = "Tu password";
        // $mensaje = "Ingrese a este link http://localhost/6toanio/proyecto_final/remedic/confirmar_pass.php?$row['token']";
        $mensaje = "Tu contraseña es ".$row['token']." Ingrese a este link http://localhost/6toanio/proyecto_final/remedic/confirmar_pass.php";
        mail($para, $titulo, $mensaje);

      }


  ?>
