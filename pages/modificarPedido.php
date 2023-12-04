
<?php
// Requiere la clase Database y cualquier configuración necesaria
require_once('config.php');

// Verifica si se reciben los datos necesarios del formulario de modificación
if (isset($_POST['idPedido']) && isset($_POST['idUsuario']) && isset($_POST['fechaPedido']) && isset($_POST['estadoPedido'])) {
    // Obtén los datos del formulario
    $idPedido = $_POST['idPedido'];
    $idUsuario = $_POST['idUsuario'];
    $fechaPedido = $_POST['fechaPedido'];
    $estadoPedido = $_POST['estadoPedido'];

    // Puedes realizar validaciones adicionales aquí según tus necesidades

    // Crea una instancia de la clase Database
    $db = new Database();

    // Actualiza el pedido en la base de datos
    $query = "UPDATE pedidos SET
              id_usuario = '$idUsuario',
              fecha_pedido = '$fechaPedido',
              estado = '$estadoPedido'
              WHERE id_pedido = '$idPedido'";

    $result = $db->query($query);

    // Verifica el resultado de la operación
    if ($result) {
        echo "Pedido modificado correctamente.";
    } else {
        echo "Error al modificar el pedido.";
    }

    // Cierra la conexión a la base de datos
    $db->closeConnection();
} else {
    echo "Faltan datos en la solicitud.";
}
?>
