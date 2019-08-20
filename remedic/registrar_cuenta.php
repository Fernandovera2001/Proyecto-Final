<form id="form1">
  <input type="text" id="nombre"  placeholder="Nombre">
  <br>
  <input type="text" id="apellido"  placeholder="Apellido">
  <br>
  <input type="text" id="email"  placeholder="Email">
  <br>
  <input type="text" id="usuario"  placeholder="Usuario">
  <br>
  <input type="password" id="clave"  placeholder="Clave">
  <br>
  <input type="password" id="clave2"  placeholder="Confirmar Clave">
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

      //AJAX PARA MANDAR DATOS POR GET
      $("#registrar_cuenta").click(function(){
        var nombre = $("#nombre").val();
        var apellido = $("#apellido").val();
        var email = $("#email").val();
        var usuario = $("#usuario").val();
        var clave = $("#clave").val();
        var clave2 = $("#clave2").val();

          if (nombre =="") {
            alert("Debes completar con tu nombre");
          }
          if (apellido =="") {
            alert("Debes completar con tu apellido");
          }
          if (email =="") {
            alert("Debes completar con algun email");
          }
          if (usuario =="") {
            alert("Debes completar con algun usuario");
          }
          if (clave =="") {
            alert("Debes completar con alguna contraseña");
          }
          if (clave != clave2) {
            alert("Las contraseñas deben ser iguales");
          }
          
      })

    });
  </script>
