<?php
// eliminar_usuario.php

require_once 'config.php';

if (isset($_GET['id'])) {
    $idUsuario = $_GET['id'];

    // Crear una instancia de la clase Database
    $db = new Database();

    // Realizar la lógica de eliminación en tu base de datos
    $sql = "DELETE FROM usuarios WHERE id_usuario = $idUsuario";
    $db->query($sql);

    // Redirigir a la página principal o donde sea apropiado después de la eliminación
    header("Location: tablesUsuarios.php");
    exit();
} else {
    // Manejar el caso en el que no se proporciona un ID de usuario válido
    echo "ID de usuario no válido.";
}
?>
