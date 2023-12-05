<?php
require_once('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $idUsuario = $_POST['idUsuario'];
    $comentario = $_POST['comentario'];
    $valoracion = $_POST['valoracion'];

    // Validar y limpiar los datos según sea necesario

    $db = new Database();
    $insertQuery = "INSERT INTO comentarios_valoraciones (id_usuario, comentario, valoracion)
                    VALUES ($idUsuario, '$comentario', $valoracion)";

    $result = $db->query($insertQuery);

    if ($result) {
        echo "Comentario y valoración agregados correctamente";
    } else {
        echo "Error al agregar el comentario y valoración";
    }

    $db->closeConnection();
}
?>
