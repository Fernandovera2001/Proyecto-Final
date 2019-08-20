
<form id="alta"  method="post" action="validar.php">
  <input type="text" id="usuario" name="usuario" required placeholder="Usuario">
  <br>
  <input type="password" id="clave" name="clave" required placeholder="Contraseña">
  <br>
  <br>
  <button name="acceder" type="submit">Acceder</button>
</form>
  <button name="submit" type="submit" id="btn_crearcuenta">Crear Cuenta</button>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript">
  //AJAX TRAE EL FORMULARIO REGISTRAR CUENTA
    $(document).ready(function(){
      $("#btn_crearcuenta").on("click",function(){ //APRETAMOS EL BOTON CON EL ID #btn_crearcuenta
        $.ajax({
          type: "POST",
          url: "registrar_cuenta.php", //TRAE LO QUE ESTA EN registrar_cuenta.html
          success: function(response){
            $("#contenido_registrar").html(response); //Y LO IMPRIME EN EL ID contenido_registrar
          }
        });
      });

    });
  </script>
