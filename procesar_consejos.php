<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("conexion_db.php");

    // Obtener y limpiar los datos del formulario
    $nombre = mysqli_real_escape_string($conn, $_POST['nombre']);
    $apellidos = mysqli_real_escape_string($conn, $_POST['apellidos']);
    $comentario = mysqli_real_escape_string($conn, $_POST['comentario']);

    // Verificar si los campos no están vacíos
    if (!empty($nombre) && !empty($apellidos) && !empty($comentario)) {
        $sql = "INSERT INTO consejos (nombre, apellidos, comentario) VALUES ('$nombre', '$apellidos', '$comentario')";

        // Ejecutar la consulta SQL
        if ($conn && $conn->query($sql) === TRUE) {
            header("Location: consejos.php"); 
        exit();
        } else {
            echo "Error al agregar consejo: " . $conn->error;
        }
    } else {
        echo "Por favor, completa todos los campos del formulario.";
    }


    // Cerrar la conexión a la base de datos
    $conn->close();
}
?>
