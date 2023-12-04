<?php
// Requiere la clase Database y cualquier configuración necesaria
require_once('config.php');

// Verifica si se reciben los datos necesarios del formulario de modificación
if (isset($_POST['idUsuario']) && isset($_POST['nombreUsuario']) && isset($_POST['correoUsuario']) && isset($_POST['contrasenaUsuario']) && isset($_POST['rolUsuario']) && isset($_POST['telefonoUsuario']) && isset($_POST['direccionUsuario']) && isset($_POST['edadUsuario'])) {
    // Obtén los datos del formulario
    $idUsuario = $_POST['idUsuario'];
    $nombreUsuario = $_POST['nombreUsuario'];
    $correoUsuario = $_POST['correoUsuario'];
    $contrasenaUsuario = $_POST['contrasenaUsuario'];
    $rolUsuario = $_POST['rolUsuario'];
    $telefonoUsuario = $_POST['telefonoUsuario'];
    $direccionUsuario = $_POST['direccionUsuario'];
    $edadUsuario = $_POST['edadUsuario'];

    // Puedes realizar validaciones adicionales aquí según tus necesidades

    // Crea una instancia de la clase Database
    $db = new Database();

    // Actualiza el usuario en la base de datos
    $query = "UPDATE usuarios SET
              nombre_completo = '$nombreUsuario',
              correo = '$correoUsuario',
              contrasena = '$contrasenaUsuario',
              rol = '$rolUsuario',
              telefono = '$telefonoUsuario',
              direccion = '$direccionUsuario',
              edad = '$edadUsuario'
              WHERE id_usuario = '$idUsuario'";

    
    $result = $db->query($query);

    // Verifica el resultado de la operación
    if (!$result) {
        echo "Usuario modificado correctamente.";
    } else {
        echo "Error al modificar el usuario.";
    }

    // Cierra la conexión a la base de datos
    $db->closeConnection();
} else {
    echo "Faltan datos en la solicitud.";
}
?>
