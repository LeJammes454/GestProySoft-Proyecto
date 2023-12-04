<?php
// eliminar_pedido.php

require_once 'config.php'; // Asegúrate de que el nombre del archivo coincida con tu archivo de configuración

if (isset($_GET['id'])) {
    $idPedido = $_GET['id'];

    // Crear una instancia de la clase Database
    $db = new Database();

    // Realizar la lógica de eliminación en tu base de datos
    $sql = "DELETE FROM pedidos WHERE id_pedido = $idPedido";
    $db->query($sql);

    // Redirigir a la página principal o donde sea apropiado después de la eliminación
    header("Location: tablesPedidos.php");
    exit();
} else {
    // Manejar el caso en el que no se proporciona un ID de pedido válido
    echo "ID de pedido no válido.";
}
?>
