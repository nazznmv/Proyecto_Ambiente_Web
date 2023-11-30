<?php
// Obtener datos del formulario
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$comentario = $_POST['comentario'];

// Preparar y ejecutar la consulta SQL para insertar datos en la tabla consejos
$sql = "INSERT INTO consejos (nombre, apellidos, comentario) VALUES ('$nombre', '$apellidos', '$comentario')";

if ($conn->query($sql) === TRUE) {
  echo "Consejo agregado correctamente";
} else {
  echo "Error al agregar consejo: " . $conn->error;
}

$conn->close();
?>
