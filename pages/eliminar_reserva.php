<?php
// eliminar_reserva.php

require_once 'config.php'; // Asegúrate de que el nombre del archivo coincida con tu archivo de configuración

if (isset($_GET['id'])) {
    $idReserva = $_GET['id'];

    // Crear una instancia de la clase Database
    $db = new Database();

    // Realizar la lógica de eliminación en tu base de datos
    $sql = "DELETE FROM reservas WHERE id_reserva = $idReserva";
    $db->query($sql);

    // Redirigir a la página principal o donde sea apropiado después de la eliminación
    header("Location: tablesReservas.php");
    exit();
} else {
    // Manejar el caso en el que no se proporciona un ID de reserva válido
    echo "ID de reserva no válido.";
}
?>
