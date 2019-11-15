

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
        <a class="navbar-brand" href="index.html"><i class="flaticon-pharmacy"></i><span>Re</span>Medic</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index.html" class="nav-link">Inicio</a></li>
            <li class="nav-item"><a href="doctor.html" class="nav-link">Doctores</a></li>
            <li class="nav-item"><a href="ver_turnos.html" class="nav-link">Ver Turnos</a></li>
            <li class="nav-item"><a href="contact.html" class="nav-link">Contacto</a></li>
            <li class="nav-item"><a href="logout.php" class="nav-link">Cerrar Sesión</a></li>
          </ul>
        </div>
      </div>
    </nav>
      <!-- END nav -->

      <div class="hero-wrap" style="background-image: url('images/bg_1.jpg'); height:400px; ">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-8 ftco-animate text-center">
              <h1 class="mb-4">LO MÁS VALIOSO ES TU SALUD.</h1>
            </div>
          </div>
        </div>
      </div>

      <section class="ftco-services">
        <div class="container">
          <div class="row no-gutters">
            <div class="col-md-4 ftco-animate py-5 nav-link-wrap">
              <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link px-4 active" id="v-pills-master-tab" data-toggle="pill" href="#v-pills-master" role="tab" aria-controls="v-pills-master" aria-selected="true"><span class="mr-3 flaticon-tooth"></span> Odontologia</a>
              </div>
            </div>
            <div class="col-md-8 ftco-animate p-4 p-md-5 d-flex align-items-center">

              <div class="tab-content pl-md-5" id="v-pills-tabContent">

                <h1><span class="icon mb-3 d-block flaticon-tooth">Odontología</span></h1>

                  <!-- CALENDARIO PARA LOS TURNOS -->
                  <form action="registrar_turno.php" method="post">
                    Coloque Titulo
                    <br><input type="text" required name="titulo"><br>

                    Eliga Fecha<br>
                    <input id="fecha" name="fecha" type="date" required min="<?php echo date("y-m-d"); ?>"><br>

                    Eliga Hora<br>
                    <select id="horario" required name="horario">
                      <option></option>
                      <option id="9">9</option>
                      <option id="10">10</option>
                      <option id="11">11</option>
                      <option id="12">12</option>
                      <option id="13">13</option>
                      <option id="14">14</option>
                      <option id="15">15</option>
                      <option id="16">16</option>
                      <option id="17">17</option>
                      <option id="18">18</option>
                    </select>HS
                    <button type="submit">Reservar</button>
                  </form>
                    <!-- TERMINA CALENDARIO PARA LOS TURNOS -->

              </div>
            </div>
          </div>
        </div>
      </section>

    <br>

  <!-- FOOTER-->
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
                <h2 class="ftco-heading-2">¿Tiene alguna pregunta?</h2>
                <div class="block-23 mb-3">
                  <ul>
                    <li><span class="icon icon-map-marker"></span><span class="text">Francisco Perito Moreno 601, San Carlos de Bariloche, Río Negro</span></li>
                    <li><span class="icon icon-phone"></span><span class="text">0294 442-6100</span></a></li>
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
    </body>
  </html>
