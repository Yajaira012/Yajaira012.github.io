// Obtén la fecha y hora actual
var fechaActual = new Date();

// Obtiene la hora actual del objeto Date
var hora = fechaActual.getHours();

// Define una variable para almacenar el mensaje
var mensaje;

var anio = fechaActual.getFullYear();

// Determina el mensaje según la hora del día
if (hora >= 5 && hora < 12) {
    mensaje = "Buenos días";
} else if (hora >= 12 && hora < 18) {
    mensaje = "Buenas tardes";
} else {
    mensaje = "Buenas noches";
}

var nombreUsuario;

document.getElementById("saludoMensaje").innerHTML = mensaje;

document.getElementById("ObtenerAnio").innerHTML = anio;
