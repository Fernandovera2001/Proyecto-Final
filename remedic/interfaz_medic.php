

  <!--//////////////  ////////////////  ///////////////   //              //  //////////////////  //////////////////  ////////////////////////  ///////////////
      //          //  //            //  //            //    //          //    //                  //                             //             //           //
      //          //  //            //  //            //      //      //      //                  //                             //             //           //
      //          //  //            //  //            //          //          //                  //                             //             //           //
      //          //  //            //  //            //          //          //                  //                             //             //           //
      /////////////   ////////////////  //            //          //          //////////          //                             //             //           //
      //              ////              //            //          //          //                  //                             //             //           //
      //              //  //            //            //          //          //                  //                             //             //           //
      //              //    //          //            //          //          //                  //                             //             //           //
      //              //       //       //            //          //          //                  //                             //             //           //
      //              //          //    ////////////////          //          //////////////////  //////////////////             //             ///////////////
  -->
  <?php
  include("seguridad.php");
  include("conexion.php");
  ?>
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <style media="screen">
        td{
          padding: 5px;
        }
      </style>
      <title>Remedic</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

      <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
      <link rel="stylesheet" href="css/animate.css">

      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="css/magnific-popup.css">

      <link rel="stylesheet" href="css/aos.css">

      <link rel="stylesheet" href="css/ionicons.min.css">

      <link rel="stylesheet" href="css/bootstrap-datepicker.css">
      <link rel="stylesheet" href="css/jquery.timepicker.css">


      <link rel="stylesheet" href="css/flaticon.css">
      <link rel="stylesheet" href="css/icomoon.css">
      <link rel="stylesheet" href="css/style.css">
    </head>
    <body>


    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="interfaz_medic.php"><i class="flaticon-pharmacy"></i><span>Re</span>Medic</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="interfaz_medic.php" class="nav-link">Inicio</a></li>
            <li class="nav-item active"><a name="pacientes" id="btn_pacientes" class="nav-link">Pacientes</a></li>
            <li class="nav-item active"><a name="turnos" id="btn_turnos" class="nav-link">Turnos</a></li>
            <li class="nav-item active"><a href="cambiar_contrasenia.php" class="nav-link">Cambiar Contraseña</a></li>
            <li class="nav-item active"><a href="logout.php" class="nav-link">Cerrar Sesión</a></li>
          </ul>
        </div>
      </div>
    </nav>
      <!-- END nav -->

      <section class="ftco-services">
        <div class="container" id="container" style="width: 1100px;">
          <br>
          <br>
          <h3>Turnos</h3>
          <div class="turnos_pacientes" id="turnos_pacientess">
          <table border="1">
            <tr>
              <td>Nombre</td>
              <td>Apellido</td>
              <td>Email</td>
              <td>Titulo</td>
              <td>Fecha</td>
              <td>Hora</td>
              <td>Eliminar Turno</td>
            </tr>

            <?php
            include("conexion.php");
            $sql = "SELECT * FROM turnos INNER JOIN login ON turnos.id_pacientes = login.id";
            $result = mysqli_query($conexion, $sql);

            //$resultado = mysqli_query($conexion, "SELECT nombre FROM login WHERE email = '$email'");
            while ($mostrar = mysqli_fetch_array($result)) {
             ?>
            <tr>
              <td><?php echo $mostrar['nombre']; ?></td>
              <td><?php echo $mostrar['apellido']; ?></td>
              <td><?php echo $mostrar['email']; ?></td>
              <td><?php echo $mostrar['titulo']; ?></td>
              <td><?php echo $mostrar['fecha']; ?></td>
              <td><?php echo $mostrar['hora']; ?></td>
              <td><a href="cancelar_turnos.php?id_turnos=<?php echo $mostrar['id_turnos'];?>">Cancelar Turno</a></td>
            </tr>
            <?php
          }
             ?>
          </table>
          </div>
          </div>

          <div class="row no-gutters">
            <div class="col-md-8 ftco-animate p-4 p-md-5 d-flex align-items-center">
              <div class="tab-content pl-md-5" id="v-pills-tabContent">
              </div>
            </div>
          </div>
        </div>
      </section>

    <br>



    <footer class="ftco-footer ftco-bg-dark ftco-section img" style="background-image: url(images/bg_5.jpg);">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Remedic</h2>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>

          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">¿Alguna Pregunta??</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">DIRECCION</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">ACA VA EL NUMERO DE CEL</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">ACA VA A EL MAIL</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">

        </div>
      </div>
    </footer>


    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

    <!-- Modal -->
      <div class="modal fade" id="modalAppointment" tabindex="-1" role="dialog" aria-labelledby="modalAppointmentLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalAppointmentLabel">Appointment</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="#">
                <div class="form-group">
                  <label for="appointment_name" class="text-black">Full Name</label>
                  <input type="text" class="form-control" id="appointment_name">
                </div>
                <div class="form-group">
                  <label for="appointment_email" class="text-black">Email</label>
                  <input type="text" class="form-control" id="appointment_email">
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="appointment_date" class="text-black">Date</label>
                      <input type="text" class="form-control" id="appointment_date">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="appointment_time" class="text-black">Time</label>
                      <input type="text" class="form-control" id="appointment_time">
                    </div>
                  </div>
                </div>


                <div class="form-group">
                  <label for="appointment_message" class="text-black">Message</label>
                  <textarea name="" id="appointment_message" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="Send Message" class="btn btn-primary">
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
      <style type="text/css">@import url("css/calendar-blue.css");</style>
  <script src="js/calendar.js" type="text/javascript"></script>
  <script src="js/calendar-es.js" type="text/javascript"></script>
  <script src="js/calendar-setup.js" type="text/javascript"></script>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $("#btn_pacientes").on("click",function(){
          $.ajax({
            type: "POST",
            url: "ver_pacientes.php",
            success: function(response){
              $("#container").html(response);
            }
          });
        });

        $("#container").on("click" ,"#volver_turnos", function(){
          $.ajax({
            type: "POST",
            url: "ver_turnos.php",
            success: function(response){
              $("#container").html(response)
            }
          });
        });

        $("#container").on("click", "#btn_pacientes", function(){
          $.ajax({
            type: "POST",
            url: "ver_pacientes.php",
            success: function(response){
              $("#container").html(response);
            }
          });
        });

        $("#btn_turnos").on("click",function(){
          $.ajax({
            type: "POST",
            url: "ver_turnos.php",
            success: function(response){
              $("#container").html(response);
            }
          });
        });





        $("#container").on("keyup","#pacientes", function(){
          var pacientes = $("#pacientes").val();
          if (pacientes.length > 1) {

            $("#listado").show();
            $.get("busca_pacientes.php", {busca:pacientes}, function(respuesta){
              $("#listado").html(respuesta);
            });
          }else {

            $("#listado").hide();
          }
        });

      });
    </script>
    </body>
  </html>
