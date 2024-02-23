<?php include("header.php");
verificarSesion();

if (isset($_COOKIE['correo_enviado']) && $_COOKIE['correo_enviado'] == "true") {
  echo '<div class="alert alert-success text-center my-4">Correo enviado</div>';
  // Eliminar la cookie
  setcookie("correo_enviado", "", time() - 3600, "/");
}
?>
<!-- end header section -->
<!-- slider section -->
<section class="slider_section position-relative">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="slider_item-box layout_padding2">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <div class="img-box">
                  <div>
                    <img src="../images/diseño2.jpg" class="rounded">
                  </div>
                </div>
              </div>
              <div class="col-md-8">
                <div class="detail-box">
                  <div>
                    <h1>
                      Maquinados y
                      Automatizaciones
                    </h1>
                    <p>
                      Siempre con un servicio de calidad, destacando en eficiencia, y precisión.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item ">
        <div class="slider_item-box layout_padding2">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <div class="img-box">
                  <div>
                    <img src="../images/Torneado.jpeg" class="rounded">
                  </div>
                </div>
              </div>
              <div class="col-md-8">
                <div class="detail-box">
                  <div>
                    <h1>
                      <span>
                        Calidad y <br>eficiencia
                      </span>
                    </h1>
                    <p>
                    <strong id="saludoMensaje"></strong><br>
                    Bienvenido a la página de maquinados y automatizaciones,<br> es un placer tenerte por aqui.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item ">
        <div class="slider_item-box layout_padding2">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <div class="img-box">
                  <div>
                    <img src="../images/FresadoPres.jpg" class="rounded" />
                  </div>
                </div>
              </div>
              <div class="col-md-8">
                <div class="detail-box">
                  <div>
                    <h1>
                      Personas de <br>
                      <span>
                        confianza
                      </span>
                    </h1>
                    <p>
                      Siempre laborando de la mejor manera atenta, detallada y correcta.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="slider_nav-box">
      <div class="custom_carousel-control">
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
</section>
<!-- end slider section -->
</div>
<div class="bg">

  <!-- about section -->
  <section class="about_section layout_padding">
    <div class="container">
      <div class="custom_heading-container">
        <h3>
          Sobre nosotros
        </h3>
      </div>
      <p class="layout_padding2-top">
        Amplia experiencia y calidad en servicio, precios accesibles.
        Agradecemos su atención que nos brinda, para ponernos a sus órdenes y así ofrecerles nuestro mejor servicio, calidad y eficiencia en nuestros trabajos.
      </p>
      <div class="img-box layout_padding2">
        <img src="../images/tornoCnc.jpg" class="rounded">
      </div>
      <p class="layout_padding2-bottom">
        Agradecemos su atención que nos brinda, para ponernos a sus órdenes y
        así ofrecerles nuestro mejor servicio, calidad y eficiencia en nuestros
        trabajos.
      </p>
    </div>
  </section>


  <!-- end about section -->

  <!-- service section -->

  <section class="service_section layout_padding-bottom">

    <div class="container">
      <div class="custom_heading-container">
        <h3>
          Nuestros servicios
        </h3>
      </div>
      <p>
        Contamos con los siguientes tipos de trabajos:
      </p>

      <div class="service_container">
        <div class="row">
          <div class="col-md-4">
            <div class="box b-1">
              <div class="img-box">
                <img src="../images/diseño.jpg" class="rounded">
              </div>
              <div class="detail-box" class="text-center">
                <h6>
                  Diseño
                </h6>
                <p>
                  Contamos con el servicio de diseño, en el cual se nos proporcionan
                  las medidad y se procede a realizar el diseño que se desee.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="box b-1">
              <div class="img-box">
                <img src="../images/Torneado.jpeg" class="rounded">
              </div>
              <div class="detail-box">
                <h6>
                  Torneado
                </h6>
                <p>
                  Se cuenta con servicio de torneado el cual,
                  principalmente se realiza en torno manual
                  o dependiendo de sus necesidades támbien se cuenta con torneado CNC(Control Numerico Computarizado).
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box b-1">
              <div class="img-box">
                <img src="../images/planeado.jpg" class="rounded">
              </div>
              <div class="detail-box">
                <h6>
                  Fresado
                </h6>
                <p>
                  Se cuenta con servicio de fresado se realiza por diseño.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end service section -->

  <!-- work section -->

  <section class="work_section layout_padding">
    <div class="container">
      <div class="custom_heading-container">
        <h3>
          Como Trabajamos
        </h3>
      </div>
    </div>
    <div class="work_container ">
      <div class="box b-1">
        <div class="img-box">
          <img src="../images/atencion-al-cliente.png" alt="">
        </div>
        <div class="name">
          <h6>
            Buena atención con el cliente
          </h6>
        </div>
      </div>
      <div class="box b-2">
        <div class="img-box ">
          <img src="../images/tiempo-rapido.png" alt="">
        </div>
        <div class="name">
          <h6>
            Buen tiempo de entrega
          </h6>
        </div>
      </div>
      <div class="box b-3">
        <div class="img-box ">
          <img src="../images/archivo.png" alt="">
        </div>
        <div class="name">
          <h6>
            Trabajos con especificaciones detalladas
          </h6>
        </div>
      </div>
      <div class="box b-4">
        <div class="img-box ">
          <img src="../images/unido.png" alt="">
        </div>
        <div class="name">
          <h6>
            Gran trabajo en equipo
          </h6>
        </div>
      </div>
    </div>
  </section>
  <!-- end work section -->


  <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="custom_heading-container">
        <h3>
          <br>
          ¿Qué dicen nuestros clientes?
        </h3>
      </div>
      <div class="layout_padding2-top">
        <div class="client_container">
          <div class="detail-box">
            <p>
              Me encanta la manera en la que trabajan, cuentan con un
              muy buen precio, con buenos tiempos de entrega y
              excelente trato con el cliente.
            </p>
          </div>
          <div class="client_id">
            <div class="img-box">
              <img src="../images/client.png" alt="">
            </div>
            <div class="name">
              <h5>
                Juan Gutierrez
              </h5>
              <h6>
                Cliente
              </h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- info section -->
  <?php include("footer.php");   ?>