<?php
require_once('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombrePlatillo = $_POST['nombrePlatillo'];
    $descripcionPlatillo = $_POST['descripcionPlatillo'];
    $precioPlatillo = $_POST['precioPlatillo'];
    $categoriaPlatillo = $_POST['categoriaPlatillo'];
    $imagenPlatillo = $_POST['imagenPlatillo'];

    // Validar y limpiar los datos según sea necesario

    $db = new Database();
    $insertQuery = "INSERT INTO platillos (nombre, descripcion, precio, id_categoria, imagen_url)
                    VALUES ('$nombrePlatillo', '$descripcionPlatillo', $precioPlatillo, $categoriaPlatillo, '$imagenPlatillo')";

    $result = $db->query($insertQuery);

    if ($result) {
        echo "Platillo agregado correctamente";
    } else {
        echo "Error al agregar el platillo";
    }

    $db->closeConnection();
}
?>
