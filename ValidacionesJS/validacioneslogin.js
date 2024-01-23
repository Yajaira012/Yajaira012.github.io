// script.js

var sanitizedEmail;
var sanitizedPassword;

function validateLogin() {
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    if (email === '' || password === '') {
        alert('Por favor, complete todos los campos.');
        return;
    }

    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert('Ingrese un correo electrónico válido.');
        return;
    }

    sanitizedEmail = email.replace(/[^\w\s.@]/gi, '');
    sanitizedPassword = password.replace(/[^\w\s]/gi, '');

    console.log('Correo electrónico sanitizado:', sanitizedEmail);
    console.log('Contraseña sanitizada:', sanitizedPassword);

    if (sanitizedEmail === '19260@virtual.utsc.edu.mx' && sanitizedPassword === 'HolaMundo') {
        window.location.href = 'Seccion/menu.html';
    } else {
        alert('Credenciales incorrectas. Inténtelo de nuevo.');
    }
}
