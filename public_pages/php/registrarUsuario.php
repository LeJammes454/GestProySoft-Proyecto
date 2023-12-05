<?php
// Incluye la configuración de la base de datos
require_once('../config.php');

// Obtiene los datos del formulario
$nombreCompleto = $_POST['nombreCompleto'];
$edad = $_POST['edad'];
$correo = $_POST['correo'];
$contrasena = password_hash($_POST['contrasena'], PASSWORD_BCRYPT); // Hash de la contraseña

// Inserta los datos en la tabla de usuarios
$sql = "INSERT INTO usuarios (nombre_completo, edad, correo, contrasena) VALUES (?, ?, ?, ?)";
$stmt = $conexion->prepare($sql);
$rol = 'usuario'; // Establece el rol por defecto
$stmt->bind_param("sisss", $nombreCompleto, $edad, $correo, $contrasena);

if ($stmt->execute()) {
    echo json_encode(['success' => true, 'message' => 'Registro exitoso']);
} else {
    echo json_encode(['success' => false, 'message' => 'Error al registrar']);
}

// Cierra la conexión a la base de datos
$stmt->close();
$conexion->close();
?>
