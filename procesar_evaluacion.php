<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include("conexion_db.php");

    if (isset($_POST["nombre_docente"]) && isset($_POST["curso"])&& isset($_POST["carrera"]) && isset($_POST["experiencia"])) {
        $nombre_docente = $_POST["nombre_docente"];
        $curso = $_POST["curso"];
        $carrera = $_POST["carrera"];
        $experiencia = $_POST["experiencia"];
        
        $sql = "INSERT INTO evaluacion (nombre_docente, curso, carrera, experiencia) VALUES ('$nombre_docente', '$curso','$carrera', '$experiencia')";
        
    
    if ($conn->query($sql) === TRUE) {
        echo "REvaluación agregada con éxito.";
    } else {
        echo "Error al agregar la evaluación: " . $conn->error;
    }
}
}
?>