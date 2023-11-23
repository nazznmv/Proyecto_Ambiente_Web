<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

    <header class="header">
        <h1 class="logo"><a href="index.html">Universiblog &nbsp;<span>Tu Portal Informativo</span></a></h1>
        <ul class="main-nav">
            <li><a href="index.html">Inicio</a></li>
            <li><a href="consejos.html">Consejos</a></li>
            <li><a href="evaluacion_profes.html">Evaluaciones</a></li>
            <li><a href="horarios.html">Horarios</a></li>
            <li><a href="resenha_uni.html">Reseña</a></li>
            <li><a href="test_vocacional.html">Test</a></li>
            <li><a href="nosotros.html">Nosotros</a></li>
        </ul>
    </header> 

    <h2>Inicio de Sesión</h2>
    
    <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include("db.php");

    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        $sql = "INSERT INTO login (username, password) VALUES ('$username', '$password')";
}
}
?>

<div class="login-container">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="username">Nombre de usuario:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Iniciar Sesión">
    </form>
</div>
<footer class="footer">
</body>
</html>
