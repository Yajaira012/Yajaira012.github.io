
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

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'La dirección de correo electrónico no es válida';
  }
  if (empty($telefono)) {
    $errors[] = 'El campo telefono es obligatorio';
  }
if (empty($_FILES['archivo']['name'])) {
    $errors[] = 'El campo archivo es obligatorio';
}
  if (empty($trabajo)) {
    $errors[] = 'El campo trabajo es obligatorio';
  }
  if (empty($mensaje)) {
    $errors[] = 'El campo mensaje es obligatorio';
  }

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
      $mail->Username = 'dg8123819040@gmail.com';
      $mail->Password = 'grfneytjrspnlkyp';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Port = 587;

      $mail->setFrom('dg8123819040@gmail.com');
      $mail->addAddress('diego.dcg03@gmail.com');

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