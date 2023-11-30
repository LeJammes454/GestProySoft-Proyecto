function validateForm() {
    var form = document.getElementById("registrationForm");
    form.classList.add("was-validated");

    var nombreComplInput = document.getElementById("nombreCompl");
    var edadInput = document.getElementById("edad");
    var correoInput = document.getElementById("correo");
    var passwoInput = document.getElementById("passwo");
    var confirmPassInput = document.getElementById("confirmPass");

    // Validar la edad
    var edad = parseInt(edadInput.value);
    if (isNaN(edad) || edad < 18) {
        // Muestra una alerta de Bootstrap en la parte superior del contenedor
        var alertElement = '<div class="alert alert-danger alert-dismissible fade show" role="alert">' +
                            'Debes ser mayor de 18 años para registrarte.' +
                            '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                            '<span aria-hidden="true">&times;</span>' +
                            '</button>' +
                            '</div>';
        document.getElementById("alertContainer").innerHTML = alertElement;

        return false;
    }

    // Agrega cualquier otra validación que puedas necesitar aquí

    // Redirige al usuario si la validación es exitosa
    window.location.href = "login.html";

    return true;
}


function validarInicioSesion() {
    var correoInput = document.getElementById("correo");
    var passwoInput = document.getElementById("passwo");

    if (correoInput.value.trim() === "" || passwoInput.value.trim() === "") {
        alert("Por favor, complete todos los campos.");
        return false;
    }

    // Si todos los campos están llenos, redirige a index.html
    window.location.href = "../index.html";
    return true;
}
