<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/evaluacion.css">
    <link rel="stylesheet" href="fuentes/font.css">
    <title>Evaluación Docente</title>
</head>
<body>
    <header class="header">
        <h1 class="logo"><a href="index.php">Universiblog &nbsp<span>Tu Portal Informativo</span></a></h1>
        <ul class="main-nav">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="consejos.php">Consejos</a></li>
            <li><a href="evaluacion_profes.php">Evaluaciones</a></li>
            <li><a href="horarios.php">Horarios</a></li>
            <li><a href="resenha_uni.php">Reseña</a></li>
            <li><a href="test_vocacional.php">Test</a></li>
            <li><a href="nosotros.php">Nosotros</a></li>
        </ul>
    </header> 

    <h1 class="h1-evaluacion">Evaluación de docentes</h1>
    <div id="contenedor">
        <?php
        // Verificar si el formulario ha sido enviado
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Procesar los datos del formulario
            $nombre = $_POST["nombre"];
            $curso = $_POST["curso"];
            $carrera = $_POST["carrera"];
            $experiencia = $_POST["experiencia"];

            // Aquí puedes realizar acciones con los datos, como almacenarlos en una base de datos

            // Por ejemplo, imprimir los datos por ahora
            echo "<h2>Datos enviados:</h2>";
            echo "<p><strong>Nombre del docente:</strong> $nombre</p>";
            echo "<p><strong>Curso que imparte:</strong> $curso</p>";
            echo "<p><strong>Carrera:</strong> $carrera</p>";
            echo "<p><strong>Experiencia:</strong> $experiencia</p>";
        } else {
            // Mostrar el formulario si no se ha enviado
            ?>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <label for="nombre">Nombre del docente:</label><br>
                <input type="text" id="nombre" name="nombre" required><br>

                <label for="curso">Curso que imparte:</label><br>
                <input type="text" id="curso" name="curso" required><br>

                <label for="carrera">Carrera:</label><br>
                <input type="text" id="carrera" name="carrera" required><br>

                <label for="experiencia">Experiencia:</label><br>
                <textarea id="experiencia" name="experiencia" rows="4" required></textarea><br>

                <button type="submit">Enviar</button>
            </form>
            <?php
        }
        ?>
    </div>
    <footer>
        <ul>
            <li class="footer-p"><a href="politica-privacidad.html">Política de privacidad</a></li>
            <li><a href="terminos-condiciones.html">Términos y condiciones</a></li>
            <p>&copy; 2023 Blog Universitario. Todos los derechos reservados
        </ul>
    </footer>

</body>
</html>
