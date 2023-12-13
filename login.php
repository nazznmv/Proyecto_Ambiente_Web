<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "mel";
$database = "proyecto";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

$correo = $_POST['correo'];
$password = $_POST['password'];

$sql = "SELECT id, nombre, password FROM registro WHERE correo='$correo'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        $_SESSION['id'] = $row['id'];
        $_SESSION['nombre'] = $row['nombre'];
        $_SESSION['loggedin'] = true;
        header("Location: index.php"); // Redirige al usuario a la página principal
        exit();
    } else {
        // Contraseña incorrecta
        echo "La contraseña es incorrecta.";
    }
} else {
    // Usuario no encontrado
    echo "El usuario no existe.";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
