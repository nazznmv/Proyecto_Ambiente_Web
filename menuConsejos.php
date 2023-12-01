<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/consejos.css">
    <title>Foro para Estudiantes</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/script2.js"></script>
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
    <br>
    <br>
    <div class="menuConsejos">
        <button type="button" class="btn btn-outline-secondary">Secondary</button>
        <a href="menuConsejos.php">
            <button type="button" class="btn btn-violet btn-large">Agregar Consejo</button>
        </a>
    </div>

    <div id="mostrar-consejos">
        <?php
          function obtenerConsejos() {
            // Aquí debes tener la lógica para obtener los consejos, por ejemplo, desde una base de datos
            // En este ejemplo, simplemente devolveremos un array con algunos consejos de muestra.
            return [
                "Consejo 1: Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                "Consejo 2: Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                "Consejo 3: Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris."
            ];
        }
        ?> 
    </div>
</body>
</html>

