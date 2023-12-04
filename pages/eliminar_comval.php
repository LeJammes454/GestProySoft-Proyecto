<?php
// eliminar_comentario_valoracion.php

require_once 'config.php'; // Asegúrate de que el nombre del archivo coincida con tu archivo de configuración

if (isset($_GET['id'])) {
    $idComentario = $_GET['id'];

    // Crear una instancia de la clase Database
    $db = new Database();

    // Realizar la lógica de eliminación en tu base de datos
    $sql = "DELETE FROM comentarios_valoraciones WHERE id_comentario = $idComentario";
    $db->query($sql);

    // Redirigir a la página principal o donde sea apropiado después de la eliminación
    header("Location: tablesComVal.php");
    exit();
} else {
    // Manejar el caso en el que no se proporciona un ID de comentario válido
    echo "ID de comentario no válido.";
}
?>
