<?php include("header.php");     
verificarSesion();
?>
<!-- end header section -->

<!--Sección del mapa donde se va a ubicar el mapa-->

 <div style="width: 100vw; height: 400px;" id="map"></div>

    <!--Fin de la sección del mapa -->

    <!-- info section -->
    <section class="info_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="info-logo">
              <h2>
              Maquinados y automatizaciones
              </h2>
              <p>
              Empresa dedicada a entregar los mejores trabajos en el área industrial,
              desarrollando pequeños, medianos y grandes proyectos, todo dependiendo
              de las necesidades de los clientes.
              </p>
            </div>
          </div>
          
          <div class="col-md-4">
            <div class="info-contact">
              <h4>
                Información de contacto
              </h4>
              <div class="location">
                <h6>
                  Dirección del taller:
                </h6>
                <img src="../images/location.png" alt="">
                <span>
                  Canadá #119, Col. Unidad Nacional II, Santa Catarina, N. L.
                </span>
                </a>
              </div>
              <div class="call">
                <h6>
                  Números de contacto:
                </h6>
                <span>
                  Ing. Gregório M. Cardona Mtz.C<br>
                </span>
                <span>
                  C.P. Araceli Sagastume R.<br>
                  <img src="../images/telephone.png" alt=""> Cel: 8123-80-40-29<br>
                  <img src="../images/correo-electronico.png"> Correo: maquinadosyautom.03@gmail.com
                </span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="discover">
              <h4>
                Descubre
              </h4>
              <div class="social-box">
                <a href="https://www.facebook.com/" target="_blank">
                  <img src="../images/facebook.png">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <!-- end info_section -->

    <section class="container-fluid footer_section">
      <p>
      Maquinados y automatizaciones 2023 &copy; 
    </section>
    <!-- footer section -->
  </div>
  <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.js"></script>
  <script type="text/javascript" src="../js/jsmaps.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCAFTTGyL02Uz9Gv2EjX8BHBNLG2FbVbZk&callback=iniciarMap"></script>
</body>
</html>