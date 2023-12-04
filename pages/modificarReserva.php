<?php
// Requiere la clase Database y cualquier configuración necesaria
require_once('config.php');

// Verifica si se reciben los datos necesarios del formulario de modificación
if (
    isset($_POST['idReserva']) &&
    isset($_POST['nombreClienteModificar']) &&
    isset($_POST['fechaReservaModificar']) &&
    isset($_POST['horaReservaModificar']) &&
    isset($_POST['sillasReservaModificar']) &&
    isset($_POST['estadoReservaModificar'])
) {
    // Obtén los datos del formulario
    $idReserva = $_POST['idReserva'];
    $nombreCliente = $_POST['nombreClienteModificar'];
    $fechaReserva = $_POST['fechaReservaModificar'];
    $horaReserva = $_POST['horaReservaModificar'];
    $sillasReserva = $_POST['sillasReservaModificar'];
    $estadoReserva = $_POST['estadoReservaModificar'];

    // Puedes realizar validaciones adicionales aquí según tus necesidades

    // Crea una instancia de la clase Database
    $db = new Database();

    // Actualiza la reserva en la base de datos
    $query = "UPDATE reservas SET
              nombre_cliente = '$nombreCliente',
              fecha_reserva = '$fechaReserva',
              hora_reserva = '$horaReserva',
              sillas = '$sillasReserva',
              estado = '$estadoReserva'
              WHERE id_reserva = '$idReserva'";

    $result = $db->query($query);

    // Verifica el resultado de la operación
    if ($result) {
        echo "Reserva modificada correctamente.";
    } else {
        echo "Error al modificar la reserva.";
    }

    // Cierra la conexión a la base de datos
    $db->closeConnection();
} else {
    echo "Faltan datos en la solicitud.";
}
?>
