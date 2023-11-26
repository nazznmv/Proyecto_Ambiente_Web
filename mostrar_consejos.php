<?php
$servername = "localhost";
$username = "root";
$password = "mel";
$dbname = "Proyecto";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

// Consulta SQL para obtener todos los consejos
$sql = "SELECT nombre, apellidos, comentario FROM consejos";
$result = $conn->query($sql);

// Mostrar los consejos
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="consejo">';
        echo '<div class="usuario">';
        // Mostrar información del usuario
        echo '<div class="info-usuario">';
        echo '<h3>' . $row['nombre'] . ' ' . $row['apellidos'] . '</h3>';
        echo '</div>';
        echo '</div>';
        // Mostrar el comentario
        echo '<div class="contenido">';
        echo '<p>' . $row['comentario'] . '</p>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "No hay consejos.";
}

$conn->close();
?>
