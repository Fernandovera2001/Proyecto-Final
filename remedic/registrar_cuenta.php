<h3>Formulario de registro</h3>
<form action="validar_registro.php" method="Post" id="consulta">
  <input type="text" id="nombre" name="nombre" placeholder="Nombre">
  <br>
  <input type="text" id="apellido" name="apellido"  placeholder="Apellido">
  <br>
  <input type="text" id="gmail" name="email"  placeholder="Email">
  <br>
  <input type="password" id="clave" name="clave"  placeholder="Clave">
  <br>
  <input type="password" id="clave1" name="clave1" placeholder="Confirmar Clave">
  <br>
  <br>
  <button type="submit" id="registrar_cuenta">Registrar Cuenta</button>
</form>
  <button name="submit" id="volver_login" type="submit">Volver a Login</button>


  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript">
  //AJAX TRAE EL FORMULARIO REGISTRAR CUENTA
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
