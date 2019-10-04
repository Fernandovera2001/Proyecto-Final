<h3>Olvide mi Contraseña</h3>
<form  id="form_olvide_pass" action="recuperar_pass.php">
  <input type="text" id="mail" name="mail" placeholder="Mail">
  <br>
  <br>
  <button type="button" id="recuperar_pass">Recuperar Contraseña</button>
</form>
  <button name="submit" id="volver_login">Volver a Login</button>

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $("#volver_login").on("click",function(){ //APRETAMOS EL BOTON CON EL ID #btn_crearcuenta
        $.ajax({
          type: "POST",
          url: "volver_login.php", //TRAE LO QUE ESTA EN registrar_cuenta.html
          success: function(response){
            $("#contenido_registrar").html(response); //Y LO IMPRIME EN EL ID contenido_registrar
          }
        });
      });
    });
  </script>

<?php
include("conexion.php");
  $email = $_POST['mail'];
  $query = mysqli_query($conexion, "SELECT id FROM login WHERE email = '$email'"); //
  $n = mysqli_num_rows($query);
    if ($n == 1) {
      $row = mysqli_fetch_assoc($query);
      $_SESSION['email'] = $row['email'];
      $msg = "Tu contraseña es:".$row['contrasenia'];
      mail($row['email'], "Contraseña Olvidada; REMEDIC", $msg);
    }else {

    }



?>
