<?php
// Requiere la clase Database y cualquier configuración necesaria
require_once('config.php');

// Verifica si se reciben los datos necesarios del formulario de modificación
if (isset($_POST['idPlatillo']) && isset($_POST['nombrePlatillo']) && isset($_POST['descripcionPlatillo']) && isset($_POST['precioPlatillo']) && isset($_POST['categoriaPlatillo']) && isset($_POST['imagenPlatillo'])) {
    // Obtén los datos del formulario
    $idPlatillo = $_POST['idPlatillo'];
    $nombrePlatillo = $_POST['nombrePlatillo'];
    $descripcionPlatillo = $_POST['descripcionPlatillo'];
    $precioPlatillo = $_POST['precioPlatillo'];
    $categoriaPlatillo = $_POST['categoriaPlatillo'];
    $imagenPlatillo = $_POST['imagenPlatillo'];

    // Puedes realizar validaciones adicionales aquí según tus necesidades

    // Crea una instancia de la clase Database
    $db = new Database();

    // Actualiza el platillo en la base de datos
    $query = "UPDATE platillos SET
              nombre = '$nombrePlatillo',
              descripcion = '$descripcionPlatillo',
              precio = '$precioPlatillo',
              id_categoria = '$categoriaPlatillo',
              imagen_url = '$imagenPlatillo'
              WHERE id_platillo = '$idPlatillo'";

    
    $result = $db->query($query);

    // Verifica el resultado de la operación
    if (!$result) {
        echo "Platillo modificado correctamente.";
    } else {
        echo "Error al modificar el platillo.";
    }

    // Cierra la conexión a la base de datos
    $db->closeConnection();
} else {
    echo "Faltan datos en la solicitud.";
}
?>
