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
        <link rel="stylesheet" href="css/horarios.css">
        <link rel="stylesheet" href="fuentes/font.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <title>Horarios</title>
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

        <h1 class="h1-horarios">Generadores de horarios</h1>
        <p>Acá podrás encontrar varios links que te guiarán a páginas para poder generar tus horarios universitarios con mayor facilidad</p>

        <h2 class="h2-horarios">Creately</h2>

        <h4 class="h4-horarios">Link:</h4><br>
        <a class= "h4-horarios-url" href="https://creatly.com/es/usage/fabricante-de-horarios-escolares/" target="_blank">https://creatly.com/es/usage/fabricante-de-horarios-escolares/</a>
<br>
        <h4 class="h4-horarios">Así se ve la página:</h4>
        <center>
            <img class="imagen-horarios" src="images/creately.png" alt="creately">
        </center>

        <h2 class="h2-horarios">Coldideas</h2>

        <h4 class="h4-horarios">Link:</h4><br>
        <a class= "h4-horarios-url" href="https://horarios.coldideas.com" target="_blank">https://horarios.coldideas.com</a>
        <br>
        <h4 class="h4-horarios">Así se ve la página:</h4>
        <center>
            <img class="imagen-horarios" src="images/coldideas.png" alt="coldideas">
        </center>

        <h2 class="h2-horarios">Doodle</h2>

        <h4 class="h4-horarios">Link:</h4><br>
        <a class= "h4-horarios-url" href="https://doodle.com/es/generador-horarios/" target="_blank">https://doodle.com/es/generador-horarios/</a>
        <br>
        <h4 class="h4-horarios">Así se ve la página:</h4>
        <center>
            <img class="imagen-horarios" src="images/doodle.png" alt="doodle">
        </center>
       
        <footer>
            <ul>
                <li class="footer-p"><a href="politica-privacidad.html">Política de privacidad</a></li>
                <li><a href="terminos-condiciones.html">Términos y condiciones</a></li>
                <p>&copy; 2023 Blog Universitario. Todos los derechos reservados
            </ul>
        </footer>
    </body>
</html>
