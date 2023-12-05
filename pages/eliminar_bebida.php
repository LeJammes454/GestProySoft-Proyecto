<?php
// eliminar_platillo.php

require_once 'config.php'; // Asegúrate de que el nombre del archivo coincida con tu archivo de configuración

if (isset($_GET['id'])) {
    $idPlatillo = $_GET['id'];

    // Crear una instancia de la clase Database
    $db = new Database();

    // Realizar la lógica de eliminación en tu base de datos
    $sql = "DELETE FROM bebidas WHERE id_bebida = $idPlatillo";
    $db->query($sql);

    // Redirigir a la página principal o donde sea apropiado después de la eliminación
    header("Location: tablesBebidas.php");
    exit();
} else {
    // Manejar el caso en el que no se proporciona un ID de platillo válido
    echo "ID de Bebida no válido.";
}
?>
