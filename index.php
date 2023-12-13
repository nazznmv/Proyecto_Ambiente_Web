<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/h&f.css">
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="fuentes/font.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Blog Universitario</title>
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
                </ul>
</div>
        </div>
    </div>
    </div>
</nav>
</header>
    <!-----------CONTENIDO----------->

    <img src="images/INDEX1.png" alt=""/>

    <div></div>
    <div class="p-format"><p style="font-size: 50px">¡Bienvenido a nuestro rincón digital!</p></div>
    <div class="p-format2"><p>Donde la comunidad estudiantil se une, comparte y crece. 
        Haz de tu viaje universitario una experiencia excepcional con nosotros. ¡Descubre, conecta y 
        avanza juntos! 
    
        </p></div>
        

    <div class="image-block">
        <div class="image-container">
            <img src="images/IndexB1.jpg" alt="Imagen 1">
            <div class="text">
                <h2 class="hIndex">Guía para los estudiantes de Salud Pública</h2>
            </div>
        </div>

        <div class="image-container">
            <img src="images/IndexB2.jpg" alt="Imagen 2">
            <div class="text">
                <h2 class="hIndex">Cómo superar el síndrome del impostor y prosperar en el mundo tecnológico</h2>
            </div>
        </div>

        <div class="image-container">
            <img src="images/IndexB3.jpg" alt="Imagen 3">
            <div class="text">
                <h2 class="hIndex" >La importancia de prepararse antes de la universidad</h2>
            </div>
        </div>
    </div>

    <div class="image-block">
        <div class="image-container">
            <img src="images/IndexB4.jpg" alt="Imagen 4">
            <div class="text">
                <h2 class="hIndex">Diarios de aprendizaje a distancia: portátiles, lecciones y vida</h2>
            </div>
        </div>

        <div class="image-container">
            <img src="images/IndexB5.jpg" alt="Imagen 5">
            <div class="text">
                <h2 class="hIndex">Cinco consejos que te ayudarán en tu primer día de universidad</h2>
            </div>
        </div>

        <div class="image-container">
            <img src="images/IndexB6.jpg" alt="Imagen 6">
            <div class="text">
                <h2 class="hIndex">¿Cómo dar una charla de forma virtual?</h2>
            </div>
        </div>
    </div>
    <img src="images/BARRA.png" alt=""/><br>

    <div class="p-format2"><p>Lee artículos escritos por estudiantes de distintas universidades del país,
                con los que podrás aprender de sus experiencias como universitarios...
    
        </p></div>
   
    <img src="images/NI1.png" alt=""/>

    <!-----------FOOTER----------->

    <footer>
        <ul>
            <li class="footer-p"><a href="politica-privacidad.html">Política de privacidad</a></li>
            <li><a href="terminos-condiciones.html">Términos y condiciones</a></li>
            <p>&copy; 2023 Blog Universitario. Todos los derechos reservados
        </ul>
    </footer>
</body>
</html>
