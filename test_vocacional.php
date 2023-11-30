<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="fuentes/font.css">
    <script src="js/script.js"></script>
    <title>Test Vocacional</title>
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
    <div class="contenedor-imagen">
        <img src="images/test.png" width="1729" alt="Imagen adaptable">
    </div>
    <main>
        <div class="container">
            <h1>Test Vocacional</h1>
            <form action="procesar_resultado.php" method="post">
                <div class="datos-personales">
                    <p>¿Cuál es tu nombre completo?</p>
                    <input class="inline-field" type="text" id="nombre" name="nombre" placeholder="Nombre">
                    <input class="inline-field2" type="text" id="apellidos" name="apellidos" placeholder="Apellidos">
                    <br>
                </div>
                <div class="datos-personales">
                    <p>¿Cuál es tu correo electrónico?</p>
                    <input type="email" id="correo" name="correo" placeholder="Correo">
                    <br>
                </div>
                <div>
                    <p for="genero">¿Qué género sos?</p>
                    <div class="genero">
                        <!-- ... (código del género) ... -->
                    </div>
                    
                    <p>¿Qué valor consideras más importante?</p>
                    <input type="checkbox" name="valores[]" value="honestidad"> Honestidad
                    <input type="checkbox" name="valores[]" value="responsabilidad"> Responsabilidad

                    <!-- Otras preguntas similares -->

                    <p>¿Qué actitud te define mejor?</p>
                    <select name="actitudes">
                        <option value="positividad">Positividad</option>
                        <option value="perseverancia">Perseverancia</option>
                        <!-- Otras opciones -->
                    </select>

                    <p>¿Cómo te consideras en liderazgo?</p>
                    <input type="checkbox" name="liderazgo[]" value="trabajo_equipo"> Buen trabajo en equipo
                    <input type="checkbox" name="liderazgo[]" value="toma_decisiones"> Buena toma de decisiones
                    <!-- Otras opciones -->

                    <input type="hidden" id="generoSeleccionado" name="generoSeleccionado" value="">
                    <input type="submit" value="Enviar">
                </div>
            </form>
        </div>
    </main>
    <footer>
        <ul>
            <li class="footer-p"><a href="politica-privacidad.html">Política de privacidad</a></li>
            <li><a href="terminos-condiciones.html">Términos y condiciones</a></li>
            <p>&copy; 2023 Blog Universitario. Todos los derechos reservados
        </ul>
    </footer>
</body>
</html>
