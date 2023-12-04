<?php
require_once('config.php');

// Obtener el ID del platillo desde la solicitud GET
$idPlatillo = $_GET['id'];

// Realizar la consulta para obtener los datos del platillo
$platilloData = $db->query("SELECT * FROM platillos WHERE id_platillo = " . $idPlatillo);

// Verificar si se encontró un platillo
if (!empty($platilloData)) {
    // Tomar el primer (y debería ser único) elemento del array
    $platillo = $platilloData[0];

    // Devolver los datos en formato JSON
    echo json_encode($platillo);
} else {
    // Si no se encontró el platillo, devolver un mensaje de error o un array vacío
    echo json_encode(array("error" => "Platillo no encontrado"));
}

$db->closeConnection();
?>
