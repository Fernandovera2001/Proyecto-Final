<a class="btn" id="btn_olvidepass">Olvide mi contraseña</a>
<form id="alta"  method="post" action="validar.php">
  <input type="email" id="email" name="email" required placeholder="Email">
  <br>
  <input type="password" id="clave" name="clave" required placeholder="Contraseña">
  <br>
  <br>
  <button name="acceder" id="acceder">Acceder</button>
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

      $("#btn_olvidepass").on("click",function(){
        $.ajax({
          url: "recuperar_pass.php",
          success: function(response){
            $("#contenido_registrar").html(response);
            }
          });
        });
    });
  </script>
