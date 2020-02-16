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

<!DOCTYPE html>
<html lang="en">
  <head>
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
      <a class="navbar-brand" href="login.php"><i class="flaticon-pharmacy"></i><span>Re</span>Medic</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
    </div>
  </nav>
    <!-- END nav -->
    <div class="hero-wrap" style="background-image: url('images/bg_1.jpg'); background-attachment:fixed;">
      <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-8 ftco-animate text-center">
              <!--LOOGIN-->

            <div class="container" id="contenido_registrar">
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
            </div>
          </div>
        </div>
      </div>
    </div>


    
<!-- FOOTER-->
    <footer class="ftco-footer ftco-bg-dark ftco-section img" style="background-image: url(images/bg_5.jpg);">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Redes Sociales</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-instagram"></span><span class="text">Direccion</li>
	                <li><span class="icon icon-facebook"></span><span class="text">WPP</span></a></li>
	                <li><span class="icon icon-twitter"></span><span class="text">dam@hospitalbariloche.com.ar</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">¿Tiene alguna pregunta?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Direccion</li>
	                <li><span class="icon icon-phone"></span><span class="text">WPP</span></a></li>
	                <li><span class="icon icon-envelope"></span><span class="text">dam@hospitalbariloche.com.ar</span></a></li>
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
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/npm.js"></script>

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript">
  //AJAX TRAE EL FORMULARIO REGISTRAR CUENTA
    $(document).ready(function(){
      $("#btn_crearcuenta").on("click",function(){ //APRETAMOS EL BOTON CON EL ID #btn_crearcuenta
        $.ajax({
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
  </body>
</html>
