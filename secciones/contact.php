<?php
include("header.php");   
verificarSesion();
use PHPMailer\PHPMailer\{PHPMailer, SMTP, Exception};
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';



if (isset($_POST['submit'])) {
  $nombre = $_POST['nombre'];
  $email = $_POST['email'];
  $telefono = $_POST['telefono'];
  $trabajo = $_POST['servicio'];
  $archivoNombre = $_FILES['archivo']['name'];
  $mensaje = $_POST['asunto'];

  $errors = array();

  if (empty($nombre)) {
    $errors[] = 'El campo nombre es obligatorio';
  }
  elseif (!preg_match('/^[a-zA-Z\s]+$/', $nombre)) { 
    $errors[] = 'El campo nombre solo debe contener letras y espacios.'; 
  } 
  $nombre = htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8');
  

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'La dirección de correo electrónico no es válida';
  }
  $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');

  if (empty($telefono)) {
    $errors[] = 'El campo telefono es obligatorio';
  }
  $telefono = preg_replace('/[^0-9\s]/', '', $telefono);

  if (empty($_FILES['archivo']['name'])) {
    $errors[] = 'El campo archivo es obligatorio';
  }

  if (empty($trabajo)) {
    $errors[] = 'El campo trabajo es obligatorio';
  }
  $trabajo = htmlspecialchars($trabajo, ENT_QUOTES, 'UTF-8');

  if (empty($mensaje)) {
    $errors[] = 'El campo mensaje es obligatorio';
  }
  $mensaje = htmlspecialchars($mensaje, ENT_QUOTES, 'UTF-8');

  if (count($errors) == 0) {
    $msj = "De: $nombre<br> <a href='mailto:$email'>$email</a><br><br>";
    $msj .= "Número: $telefono<br><br>";
    $msj .= "Archivo: $archivoNombre<br><br>";
    $msj .= "Trabajo: $trabajo<br><br>";
    $msj .= "Mensaje: '<p>'.$mensaje.'<p>'";



    $mail = new PHPMailer(true);

  if (isset($_FILES['archivo']) && !empty($_FILES['archivo']['name'])) {
    $archivoNombre = $_FILES['archivo']['name'];
    $archivoRutaTemporal = $_FILES['archivo']['tmp_name'];
    $mail->addAttachment($archivoRutaTemporal, $archivoNombre);
}

    try {
      $mail->SMTPDebug = SMTP::DEBUG_OFF;
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username = 'estebancalderon867@gmail.com';
      $mail->Password = 'sxfslrocwcyhercj ';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Port = 587;

      $mail->setFrom('estebancalderon867@gmail.com');
      $mail->addAddress('estebancm282003@gmail.com');

      $mail->isHTML(true);
      $mail->Subject = 'Formulario de contacto';
      $mail->Body = utf8_decode($msj);

      $mail->send();

      $respuesta = 'Correo enviado';
    } catch (Exception $e) {
      $respuesta = 'Mensaje' . $mail->ErrorInfo;
    }

    if ($mail->send()) {
      setcookie("correo_enviado", "true", time() + 3, "/");
      header("Location: index.php");
      exit;
    } else {
      $respuesta = 'Mensaje' . $mail->ErrorInfo;
    }
  }

}


?>

    <!-- end header section -->
  </div>
  <?php
  if (isset($errors)) {
    if (count($errors) > 0) {
  ?>

      <div class="row">
        <div class="col-lg-6- col-md-4">
          <div class="alert alert-danger alert-dismissible" role="alert">
            <?php
            foreach ($errors as $error)
              echo $error . '<br>';
            ?>

          </div>
        </div>
      </div>

  <?php
    }
  }
  ?>

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="custom_heading-container">
      <h3>
        Detalles sobre trabajo/ Datos
      </h3>
    </div><br>

    
    <?php

if (isset($respuesta)) {          ?>

<div class="col-md-12 justify-content-center d-flex">
    <div class="alert alert-success text-center my-4">
      <?php echo $respuesta ?>
    </div>
  <?php  } ?>

  </div>
  

    <div class="container layout_padding2-top">

      <div class="row">
        <div class="col-md-6 mx-auto">
          <form class="form" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>".  autocomplete="off" enctype="multipart/form-data">
            <div>
              <input type="text" placeholder="Nombre" required autofocus name="nombre">
            </div>
            <div>
              <input type="email" placeholder="Correo electrónico" required name="email">
            </div>
            <div>
              <input type="text" placeholder="Número de celular" required name="telefono">
            </div>
            <br>
            <div>
              <label for="">Sube un archivo PDF con las medidas (No mayor a 10MB)</label>
              <input type="file" name="archivo" accept="application/pdf" /> 
              <script type="text/javascript">
                $('input[type="file"]').on('change', function(){
                  var ext = $( this ).val().split('.').pop();
                  if ($( this ).val() != '') {
                    if(ext === "pdf"){
                      if($(this)[0].files[0].size > 10485760){
                        alert("El documento excede el tamaño máximo");
                        $('#modal-title').text('¡Precaución!');
                        $('#modal-msg').html("Se solicita un archivo no mayor a 10MB. Por favor verifica.");
                        $("#modal-gral").modal();           
                        $(this).val('');
                      }else{
                        $("#modal-gral").hide();
                      }
                    }
                    else
                    {
                      $( this ).val('');
                      alert("Solo se permiten archivos PDF");
                    }
                  }
                });
              </script>
    

            </div>
            <br>
            <div>
              <label for="">Eliga el trabajo a cotizar</label>
              <select name="servicio" id="">
                <option value="Torneado">Torneado</option>
                <option value="Fresado">Fresado</option>
                <option value="Rectificado">Rectificado</option>
              </select>
            </div>
            <div>
              <input type="text" name="asunto" class="message-box" placeholder="Mensaje/detalles" required>
            </div>
            <div class="d-flex justify-content-center ">
              <button type="submit" name="submit">
                Enviar
              </button>
            </div>
          </form>
        </div>
      </div>
  </section>

  <!-- end contact section -->

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
            <ul>
              <li>
                <a href="contact.html">
                  Contáctanos
                </a>
              </li>
            </ul>
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

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
    Maquinados y automatizaciones 2023 &copy; 
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</body>

</html>