<?php
require_once('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombreCliente = $_POST['nombreCliente'];
    $fechaReserva = $_POST['fechaReserva'];
    $horaReserva = $_POST['horaReserva'];
    $sillasReserva = $_POST['sillasReserva'];

    // Validar y limpiar los datos según sea necesario

    $db = new Database();
    $insertQuery = "INSERT INTO reservas (nombre_cliente, fecha_reserva, hora_reserva, sillas, estado)
                    VALUES ('$nombreCliente', '$fechaReserva', '$horaReserva', $sillasReserva, 'Pendiente')";

    $result = $db->query($insertQuery);

    if ($result) {
        echo "Reserva agregada correctamente";
    } else {
        echo "Error al agregar la reserva";
    }

    $db->closeConnection();
}
?>
