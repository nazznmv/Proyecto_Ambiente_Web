<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include("conexion_db.php");

    if (isset($_POST["nombre"]) && isset($_POST["fecha"])&& isset($_POST["comentario"])) {
        $nombre = $_POST["nombre"];
        $fecha = $_POST["fecha"];
        $comentario = $_POST["comentario"];
        
        $sql = "INSERT INTO resenha (nombre, fecha, comentario) VALUES ('$nombre', '$fecha','$comentario')";
        
    
    if ($conn->query($sql) === TRUE) {
        echo "Reseña agregada con éxito.";
    } else {
        echo "Error al agregar la reseña: " . $conn->error;
    }
}
}
?>