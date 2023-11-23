<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include("db.php");

    if (isset($_POST["nombre"]) && isset($_POST["apellido"])&& isset($_POST["correo"]) && isset($_POST["password"])) {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $correo = $_POST["correo"];
        $password = $_POST["password"];
        
        $sql = "INSERT INTO regristro (nombre, apellido, correo, password) VALUES ('$nombre', '$apellido','$correo', '$password')";
        
    
    if ($conn->query($sql) === TRUE) {
        echo "Registro agregado con éxito.";
    } else {
        echo "Error al agregar registro: " . $conn->error;
    }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/regristro.css">
</head>
<body>

    <header class="header">
        <h1 class="logo">
            <a href="index.html">Universiblog &nbsp;<span>Tu Portal Informativo</span></a>
        </h1>
        
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

    <section class="form-register">
        <h1 class="titulo-foro">Formulario Registro</h1>
        <div id="contenedor">
            <form action="registro.php" method="post">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <input class="controls" type="text" name="nombres" id="nombres" placeholder="Ingrese su Nombre">
                <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Ingrese su Apellido">
                <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su Correo">
                <input class="controls" type="password" name="password" id="password" placeholder="Ingrese su Contraseña">
                
                <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
                
                <input class="botons" type="submit" value="Registrar">
                
                <p><a href="#">¿Ya tengo Cuenta?</a></p>
            </form>
        </div>
    </section>
    <footer class="footer">
</body>
</html>