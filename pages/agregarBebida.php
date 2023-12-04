<?php
require_once('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombreBebida = $_POST['nombreBebida'];
    $descripcionBebida = $_POST['descripcionBebida'];
    $precioBebida = $_POST['precioBebida'];
    $categoriaBebida = $_POST['categoriaBebida'];
    $imagenBebida = $_POST['imagenBebida'];

    // Validar y limpiar los datos según sea necesario

    $db = new Database();
    $insertQuery = "INSERT INTO bebidas (nombre, descripcion, precio, id_categoria, imagen_url)
                    VALUES ('$nombreBebida', '$descripcionBebida', $precioBebida, $categoriaBebida, '$imagenBebida')";

    $result = $db->query($insertQuery);

    if ($result) {
        echo "Bebida agregada correctamente";
    } else {
        echo "Error al agregar la bebida";
    }

    $db->closeConnection();
}
?>
