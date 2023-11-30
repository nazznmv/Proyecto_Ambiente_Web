<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/resenha.css">
    <link rel="stylesheet" href="fuentes/font.css">
    <title>Reseñas</title>
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

    <h1 class="h1-resenha">Reseñas sobre la Universidad</h1>
    <div id="contenedor">
        <form method="post" action="procesar_resena.php">
            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre"><br>

            <label for="apellido">Apellido:</label><br>
            <input type="text" id="apellido" name="apellido"><br>

            <label for="comentario">Comentario:</label><br>
            <textarea id="comentario" name="comentario" rows="4"></textarea><br>

            <button type="submit">Enviar</button>
        </form>
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
