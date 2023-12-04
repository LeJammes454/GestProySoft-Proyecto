function validateForm() {
    var form = document.getElementById("registrationForm");
    var nombreComplInput = document.getElementById("nombreCompl");
    var edadInput = document.getElementById("edad");
    var correoInput = document.getElementById("correo");
    var passwoInput = document.getElementById("passwo");
    var confirmPassInput = document.getElementById("confirmPass");

    var isValid = true;

    // Validación de campos vacíos y aplicación de clases
    [nombreComplInput, edadInput, correoInput, passwoInput, confirmPassInput].forEach(input => {
        if (!input.value) {
            input.classList.add("is-invalid");
            isValid = false;
        } else {
            input.classList.remove("is-invalid");
            input.classList.add("is-valid");
        }
    });

    // Resto de las validaciones
    var edad = parseInt(edadInput.value);
    if (isNaN(edad) || edad < 18 || edad > 120) {
        edadInput.classList.add("is-invalid");
        showAlert('La edad debe ser un número entre 18 y 120.');
        isValid = false;
    }

    var correoRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!correoRegex.test(correoInput.value)) {
        correoInput.classList.add("is-invalid");
        showAlert('Introduce un correo electrónico válido.');
        isValid = false;
    }

    if (passwoInput.value.length < 8 || !/\d/.test(passwoInput.value) || !/[a-zA-Z]/.test(passwoInput.value)) {
        passwoInput.classList.add("is-invalid");
        showAlert('La contraseña debe tener al menos 8 caracteres, incluyendo números y letras.');
        isValid = false;
    }

    if (passwoInput.value !== confirmPassInput.value) {
        confirmPassInput.classList.add("is-invalid");
        showAlert('Las contraseñas no coinciden.');
        isValid = false;
    }

    if (isValid) {
        showAlert(nombreComplInput.value,
        edadInput.value,
         correoInput.value,
         passwoInput.value,);
        $.ajax({
            url: "../php/registrarUsuario.php",
            type: "POST",
            
 // Ruta al archivo PHP que procesará el formulario
            data: {
                nombreCompleto: nombreComplInput.value,
                edad: edadInput.value,
                correo: correoInput.value,
                contrasena: passwoInput.value,
            },
            
            dataType: "json",
            success: function (response) {
                if (response.success) {
                    // Registro exitoso, redirige al usuario a la página de inicio de sesión
                    window.location.href = "login.html";
                } else {
                    showAlert(response.message);
                }
            },
            error: function () {
                //window.location.href = "login.html";
                showAlert(nombreComplInput.value,
                    edadInput.value,
                     correoInput.value,
                     passwoInput.value,);
                //showAlert('Error al conectar con el servidor');
            },
        });
    }

    return isValid;
}

function showAlert(message) {
    var alertElement = '<div class="alert alert-danger alert-dismissible fade show" role="alert">' +
                        message +
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                        '<span aria-hidden="true">&times;</span>' +
                        '</button>' +
                        '</div>';
    document.getElementById("alertContainer").innerHTML = alertElement;
}




function validarInicioSesion() {
    var correoInput = document.getElementById("correo");
    var passwoInput = document.getElementById("passwo");
    var errorContainer = document.getElementById("errorContainer");
    var errores = [];

    // Validación de campos vacíos
    if (correoInput.value.trim() === "") {
        errores.push("Por favor, ingrese su correo.");
    }

    if (passwoInput.value.trim() === "") {
        errores.push("Por favor, ingrese su contraseña.");
    }

    // Validación de formato de correo electrónico
    var correoRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!correoRegex.test(correoInput.value.trim())) {
        errores.push("Por favor, ingrese un correo electrónico válido.");
    }

    // Validación de longitud de contraseña
    if (passwoInput.value.trim().length < 6) {
        errores.push("La contraseña debe tener al menos 6 caracteres.");
    }

    // Mostrar errores en el contenedor de errores
    if (errores.length > 0) {
        mostrarErrores(errores);
        return false;
    }

    if (errores.length > 0) {
        mostrarErrores(errores);
        return false; // Evita el envío del formulario
    }

    // Si no hay errores, redirige a index.html
    window.location.href = "../index.html";
    return true;
}

function mostrarErrores(errores) {
    var errorContainer = document.getElementById("errorContainer");
    errorContainer.innerHTML = "";

    errores.forEach(function (error) {
        var errorElement = document.createElement("div");
        errorElement.className = "alert alert-danger";
        errorElement.textContent = error;
        errorContainer.appendChild(errorElement);
    });
}