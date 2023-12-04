<?php
// Requiere la clase Database y cualquier configuración necesaria
require_once('config.php');

// Verifica si se reciben los datos necesarios del formulario de modificación
if (isset($_POST['idComentario']) && isset($_POST['idUsuario']) && isset($_POST['comentario']) && isset($_POST['valoracion'])) {
    // Obtén los datos del formulario
    $idComentario = $_POST['idComentario'];
    $idUsuario = $_POST['idUsuario'];
    $comentario = $_POST['comentario'];
    $valoracion = $_POST['valoracion'];

    // Puedes realizar validaciones adicionales aquí según tus necesidades

    // Crea una instancia de la clase Database
    $db = new Database();

    // Actualiza el comentario y la valoración en la base de datos
    $query = "UPDATE comentarios_valoraciones SET
              id_usuario = '$idUsuario',
              comentario = '$comentario',
              valoracion = '$valoracion'
              WHERE id_comentario = '$idComentario'";

    $result = $db->query($query);

    // Verifica el resultado de la operación
    if (!$result) {
        echo "Comentario y valoración modificados correctamente.";
    } else {
        echo "Error al modificar el comentario y valoración.";
    }

    // Cierra la conexión a la base de datos
    $db->closeConnection();
} else {
    echo "Faltan datos en la solicitud.";
}
?>
