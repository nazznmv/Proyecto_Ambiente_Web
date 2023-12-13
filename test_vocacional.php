<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/h&f.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="fuentes/font.css">
    <script src="js/script.js"></script>
    <title>Test Vocacional</title>
</head>
<body>
        <!-----------HEADER----------->
<header  th:fragment="header" class="header" >

<nav class="navbar navbar-expand-lg navbar-dark "><div class="container-fluid">

        <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
            >
            <i class="fas fa-bars"></i>
        </button>
        <!--Logo Imagen-->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <img th:src="@{/css/imagenes/Logo.png}" alt=""/>

            <!--Titulo-->
            <a href="index.php" class="navbar-brand">Universiblog</a>

            <!--Opciones de la Página-->
            <div class="navbar-container">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="consejos.php">Consejos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="evaluacion_profes.php">Evaluaciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="horarios.php">Horarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="resenha_uni.php">Reseña</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="test_vocacional.php">Test</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="nosotros.php">Nosotros</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="registro.php">
                 <i class="fas fa-user"></i> 
                 </a>
                 </li>

                </ul>
</div>
        </div>
    </div>
    </div>
</nav>
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
                <br>
                <br>
                    <p for="genero">¿Qué género sos?</p>
                    <div class="genero">
                    <div class="opcion-genero" id="hombre" onclick="seleccionarGenero('hombre', 'Hombre')">
                <img src="images/hombre.png" alt="Hombre">
                <p>Hombre</p>
              </div>
              <div class="opcion-genero" id="mujer" onclick="seleccionarGenero('mujer', 'Mujer')">
                <img src="images/mujer.png" alt="Mujer">
                <p>Mujer</p>
              </div>
              <div class="opcion-genero" id="otro" onclick="seleccionarGenero('otro', 'Otro')">
                <img src="images/otro.png" alt="Otro">
                <p>Otro</p>
              </div>
              <br>
              <br>
</div>
                    
                    <p>¿Qué valor consideras más importante?</p>
                    <input type="checkbox" name="valores[]" value="honestidad"> Honestidad
                    <input type="checkbox" name="valores[]" value="responsabilidad"> Responsabilidad

                    <!-- Otras preguntas similares -->
                    <br><br>
                    <p>¿Qué actitud te define mejor?</p>
                    <select name="actitudes">
                        <option value="positividad">Positividad</option>
                        <option value="perseverancia">Perseverancia</option>
                        <!-- Otras opciones -->
                    </select>
                    <br><br>
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
