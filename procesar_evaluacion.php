
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("conexion_db.php");

    // Obtener y limpiar los datos del formulario
    $universidad = mysqli_real_escape_string($conn, $_POST['universidad']);
    $nombre_docente = mysqli_real_escape_string($conn, $_POST['nombre_docente']);
    $curso = mysqli_real_escape_string($conn, $_POST['curso']);
    $carrera = mysqli_real_escape_string($conn, $_POST['carrera']);
    $experiencia = mysqli_real_escape_string($conn, $_POST['experiencia']);

    // Verificar si los campos no están vacíos
    if (!empty($nombre_docente) && !empty($curso) && !empty($carrera) && !empty($experiencia)) {
        $sql = "INSERT INTO evaluacion (universidad,nombre_docente,curso, carrera, experiencia) VALUES ('$universidad','$nombre_docente', '$curso', '$carrera', '$experiencia')";

        // Ejecutar la consulta SQL
        if ($conn && $conn->query($sql) === TRUE) {
            header("Location: evaluacion_profes.php"); 
        exit();
        } else {
            echo "Error al agregar evaluacion: " . $conn->error;
        }
    } else {
        echo "Por favor, completa todos los campos del formulario.";
    }


    // Cerrar la conexión a la base de datos
    $conn->close();
}
?>
