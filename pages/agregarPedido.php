<?php
require_once('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $idUsuario = $_POST['idUsuario'];
    $fechaPedido = $_POST['fechaPedido'];
    $estadoPedido = $_POST['estadoPedido'];

    // Validar y limpiar los datos según sea necesario

    $db = new Database();
    $insertQuery = "INSERT INTO pedidos (id_usuario, fecha_pedido, estado)
                    VALUES ($idUsuario, '$fechaPedido', '$estadoPedido')";

    $result = $db->query($insertQuery);

    if ($result) {
        echo "Pedido agregado correctamente";
    } else {
        echo "Error al agregar el pedido";
    }

    $db->closeConnection();
}
?>