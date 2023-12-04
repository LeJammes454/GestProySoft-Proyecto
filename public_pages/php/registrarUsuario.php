<?php
require_once('config.php');

$db = new Database();

$nombreCompleto = $_POST['nombreCompl'];
$edad = $_POST['edad'];
$correo = $_POST['correo'];
$contrasena = password_hash($_POST['passwo'], PASSWORD_BCRYPT);

try {

    $mysql = "INSERT INTO usuarios (nombre_completo, edad, correo, contrasena) VALUES (:nombreCompl, :edad, :correo, :passwo)";
    $result = $db->query($mysql);


    if ($result) {
        echo json_encode(['success' => true, 'message' => 'Registro exitoso']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error al registrar']);
    }
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Error en la conexión a la base de datos: ' . $e->getMessage()]);
}
?>
