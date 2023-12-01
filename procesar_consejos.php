<?php
$servername = "localhost";
$username = "root";
$password = "mel";
$dbname = "proyecto";

// Crear la conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
// Obtener datos del formulario
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$comentario = $_POST['comentario'];

// Verificar si se enviaron los datos del formulario
if (isset($nombre, $apellidos, $comentario)) {
  // Preparar y ejecutar la consulta SQL para insertar datos en la tabla consejos
  $sql = "INSERT INTO consejos (nombre, apellidos, comentario) VALUES ('$nombre', '$apellidos', '$comentario')";

  // Verificar si la consulta se ejecutó correctamente
  if ($conn && $conn->query($sql) === TRUE) {
      echo "Consejo agregado correctamente";
  } else {
      echo "Error al agregar consejo: " . $conn->error;
  }
} else {
  echo "Por favor, completa todos los campos del formulario.";
}

// Cerrar la conexión a la base de datos si es necesario
$conn->close();
?>