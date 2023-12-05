<?php
// Requiere la clase Database y cualquier configuración necesaria
require_once('config.php');

// Verifica si se reciben los datos necesarios del formulario de modificación
if (
    isset($_POST['idBebida']) &&
    isset($_POST['nombreBebida']) &&
    isset($_POST['descripcionBebida']) &&
    isset($_POST['precioBebida']) &&
    isset($_POST['categoriaBebida']) &&
    isset($_POST['imagenBebida'])
) {
    // Obtén los datos del formulario
    $idBebida = $_POST['idBebida'];
    $nombreBebida = $_POST['nombreBebida'];
    $descripcionBebida = $_POST['descripcionBebida'];
    $precioBebida = $_POST['precioBebida'];
    $categoriaBebida = $_POST['categoriaBebida'];
    $imagenBebida = $_POST['imagenBebida'];

    // Puedes realizar validaciones adicionales aquí según tus necesidades

    // Crea una instancia de la clase Database
    $db = new Database();

    // Actualiza la bebida en la base de datos
    $query = "UPDATE bebidas SET
              nombre = '$nombreBebida',
              descripcion = '$descripcionBebida',
              precio = '$precioBebida',
              id_categoria = '$categoriaBebida',
              imagen_url = '$imagenBebida'
              WHERE id_bebida = '$idBebida'";

    $result = $db->query($query);

    // Verifica el resultado de la operación
    if (!$result) {
        echo "Bebida modificada correctamente.";
    } else {
        echo "Error al modificar la bebida.";
    }

    // Cierra la conexión a la base de datos
    $db->closeConnection();
} else {
    echo "Faltan datos en la solicitud.";
}
?>
