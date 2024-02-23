<?php include ("header.php"); 
verificarSesion();

$sesionValida = verificarSesion(false);
if (!$sesionValida) {
    header("Location: ../sesion/login.php");
    exit();
}
?>


  <!-- about section -->
  <section class="about_section layout_padding">
    <div class="container">
      <div class="custom_heading-container">
        <h3>
          Sobre nosotros
        </h3>
      </div>
      <p class="layout_padding2-top">
        Amplia experiencia y calidad en servicio, precios accesibles. <br>
        Agradecemos su atención que nos brinda, para ponernos a sus órdenes y
        así ofrecerles nuestro mejor servicio, calidad y eficiencia en nuestros
        trabajos.
      </p>
      <div class="img-box layout_padding2">
        <img src="../images/FresadoPres.jpg  " class="rounded">
      </div>
      <p class="layout_padding2-bottom">
        Es de gran apoyo que nos elijan para realizar sus piezas, se les da
        la prioridad, todo basado en nuestros valores y principios.
    </div>

  </section>
  <!-- end about section -->
  <div class="custom_heading-container">
    <h3>
      Máquinas con las que contamos
    </h3>
  </div>

  <section class=" slider_section position-relative">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">

        <!-- Primer elemento del carrusel -->
        <div class="carousel-item active">
          <div class="slider_item-box layout_padding2">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <div class="img-box">
                    <div>
                      <img src="../images/Fresadora3.jpg" class="rounded">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="detail-box">
                    <div>
                      <h1>
                        Fresadora<br>
                      </h1>
                      <p>
                        Máquina herramienta utilizada para mecanizar
                        piezas mediante la eliminación de material a
                        través de la acción de una herramienta de corte
                        rotativa. Esta herramienta de corte, llamada
                        fresa, posee múltiples filos o dientes distribuidos
                        en su perímetro, lo que permite realizar cortes precisos
                        y complejos en la pieza de trabajo.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Segundo elemento del carrusel -->
        <div class="carousel-item ">
          <div class="slider_item-box layout_padding2">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <div class="img-box">
                    <div>
                      <img src="../images/Rectificadora2.jpg" class="rounded" />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="detail-box">
                    <div>
                      <h1>
                        Rectificadora<br>
                      </h1>
                      <p>
                        Máquina herramienta utilizada en el mecanizado
                        para eliminar material de una superficie mediante
                        la abrasión. Su función principal es obtener una
                        superficie plana, lisa y precisa en una pieza de trabajo.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Tercer elemento del carrusel -->
        <div class="carousel-item ">
          <div class="slider_item-box layout_padding2">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <div class="img-box">
                    <div>
                      <img src="../images/SierraCinta.jpg" class="rounded" />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="detail-box">
                    <div>
                      <h1>
                        Sierra de Cinta<br>
                      </h1>
                      <p>
                        Una sierra de cinta es una máquina de corte
                        utilizada en la industria del metal y la madera
                        para cortar materiales en diferentes formas y tamaños.
                        Consiste en una banda de acero flexible con dientes
                        filados que se extiende alrededor de dos ruedas giratorias.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Cuarto elemento del carrusel -->
        <div class="carousel-item ">
          <div class="slider_item-box layout_padding2">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <div class="img-box">
                    <div>
                      <img src="../images/MaquinaSoldar2.jpg" class="rounded" />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="detail-box">
                    <div>
                      <h1>
                        Máquina de soldar<br>
                      </h1>
                      <p>
                        La máquina de soldar Galagar MIG
                        es un equipo de soldadura que utiliza
                        el proceso de soldadura MIG (Metal Inert Gas)
                        o GMAW (Gas Metal Arc Welding). Es ampliamente
                        utilizado en la industria metalúrgica y en talleres
                        de soldadura debido a su facilidad de uso y alta productividad.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Quinto elemento del carrusel -->
        <div class="carousel-item ">
          <div class="slider_item-box layout_padding2">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <div class="img-box">
                    <div>
                      <img src="../images/Torno.jpg" class="rounded" alt="500">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="detail-box">
                    <div>
                      <h1>
                        Torno
                      </h1>
                      <p>
                        Un torno paralelo, también conocido
                        como torno de banco o torno mecánico,
                        es una máquina herramienta utilizada para
                        mecanizar piezas de trabajo de forma cilíndrica.
                        Es una de las máquinas más comunes y versátiles
                        en la industria del mecanizado.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Fin del carrusel -->
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

  <!-- info section -->

<?php 
include ("footer.php") 
?>


