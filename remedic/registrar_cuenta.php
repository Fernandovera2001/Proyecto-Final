<h3>Formulario de registro</h3>
<form  id="consulta">
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
  <button type="button" id="registrar_cuenta">Registrar Cuenta</button>
</form>
  <button name="submit" id="volver_login">Volver a Login</button>


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


    $("#registrar_cuenta").click(function(event){
      var nombre = $("#nombre").val();
      if (nombre == "") {
        alert("Falta Nombre");
      }
// <----------------------------------------------->
      var apellido = $("#apellido").val();
      if (apellido == "") {
        alert("Falta Apellido");
      }
// <----------------------------------------------->
      var gmail = $("#gmail").val();
      if (gmail == "") {
        alert("Falta Gmail")
      }
//<----------------------------------------------->
      var clave = $("#clave").val();
      if (clave == "") {
        alert("Falta Clave");
      }
//<----------------------------------------------->
      var clave1 = $("#clave1").val();
      if (clave != clave1) {
        alert("Las claves son diferentes");
      }

//<------------------------------------------------------------------------------------------------------->
      if (nombre != "" && apellido != "" && gmail != "" && clave != "") {
        $.post("validar_registro.php",{nombre:nombre, apellido:apellido, gmail:gmail, clave:clave},function(data){
          console.log("Registro Finalizado", data);
        });
      }
    });
  });
  </script>
