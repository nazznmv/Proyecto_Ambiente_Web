
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("conexion_db.php");

    // Obtener y limpiar los datos del formulario
    $universidad = mysqli_real_escape_string($conn, $_POST['universidad']);

    $nombre = mysqli_real_escape_string($conn, $_POST['nombre']);
    $fecha = mysqli_real_escape_string($conn, $_POST['fecha']);
    $comentario = mysqli_real_escape_string($conn, $_POST['comentario']);

    // Verificar si los campos no están vacíos
    if (!empty($nombre) && !empty($fecha) && !empty($comentario)) {
        $sql = "INSERT INTO resenha (universidad, nombre, fecha, comentario) VALUES ('$universidad','$nombre', '$fecha', '$comentario')";

        // Ejecutar la consulta SQL
        if ($conn && $conn->query($sql) === TRUE) {
            header("Location: resenha_uni.php"); 
        exit();
        } else {
            echo "Error al agregar reseña: " . $conn->error;
        }
    } else {
        echo "Por favor, completa todos los campos del formulario.";
    }


    // Cerrar la conexión a la base de datos
    $conn->close();
}
?>
