<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("conexion_db.php");
    if (isset($_POST['editarConsejo'])) {
        
        $idConsejo = mysqli_real_escape_string($conn, $_POST['idConsejo']);
        $nuevoNombre = mysqli_real_escape_string($conn, $_POST['nombre']);
        $nuevoApellidos = mysqli_real_escape_string($conn, $_POST['apellidos']);
        $nuevoComentario = mysqli_real_escape_string($conn, $_POST['comentario']);
    
        // Realizar la actualización en la base de datos
        $sql = "UPDATE consejos SET nombre = '$nuevoNombre', apellidos = '$nuevoApellidos', comentario = '$nuevoComentario' WHERE id_Consejos = '$idConsejo'";
        
        if ($conn->query($sql) === TRUE) {
            // Redirigir a consejos.php con un mensaje de éxito
            header("Location: consejos.php?editado=1");
            echo "Consejo editado correctamente.";
            exit();
        } else {
            echo "Error al editar el consejo: " . $conn->error;
        }
    
        $conn->close();
    }
}?>