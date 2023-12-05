<?php
require_once('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombreUsuario = $_POST['nombreUsuario'];
    $correoUsuario = $_POST['correoUsuario'];
    $contrasenaUsuario = $_POST['contrasenaUsuario'];
    $rolUsuario = $_POST['rolUsuario'];
    $telefonoUsuario = $_POST['telefonoUsuario'];
    $direccionUsuario = $_POST['direccionUsuario'];
    $edadUsuario = $_POST['edadUsuario'];

    // Validar y limpiar los datos según sea necesario

    $db = new Database();
    $insertQuery = "INSERT INTO usuarios (nombre_completo, correo, contrasena, rol, telefono, direccion, edad)
                    VALUES ('$nombreUsuario', '$correoUsuario', '$contrasenaUsuario', '$rolUsuario', '$telefonoUsuario', '$direccionUsuario', $edadUsuario)";

    $result = $db->query($insertQuery);

    if ($result) {
        echo "Usuario agregado correctamente";
    } else {
        echo "Error al agregar el usuario";
    }

    $db->closeConnection();
}
?>
