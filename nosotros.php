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
    <link rel="stylesheet" href="css/nosotros.css">
    <link rel="stylesheet" href="fuentes/font.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

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

    <img src="images/NosotrosFondo.png" alt="Fondo de Nosotros"/>
    <!-- Primer bloque de texto -->
    <section>
        <div>
            <h2 class="nosotrosU">Universiblog</h2>
            <br/>
            <img src="images/NI2.png" align="left" alt="Logo 1"/>
            <p class="lead">Bienvenido al espacio digital donde las experiencias estudiantiles 
                convergen. En nuestro blog universitario, estudiantes de diversas universidades 
                comparten sus valiosos consejos, desde cómo gestionar el tiempo hasta estrategias 
                para enfrentar desafíos académicos. </p>
            <br/>
            <p class="lead">Explora las evaluaciones detalladas de 
                profesores y descubre la perspectiva única de cada carrera. Además, accede a 
                horarios personalizados y útiles recursos para optimizar tu vida universitaria</p>
        </div>
    </section>
    <img src="images/N1.png" alt="Fondo de Nosotros"/>

    <section>
        <div>
            
            <p class="lead">Pero esto no es solo un blog, es tu plataforma para expresar tus opiniones.
                Comparte reseñas honestas sobre lo que amas y lo que crees que podría mejorar en tu 
                universidad. ¿Tienes algo que decir sobre el último proyecto? ¿Quieres destacar un 
                profesor excepcional? ¿O tal vez sugerir mejoras en las instalaciones? Este es el 
                lugar para hacerlo </p>
        </div>
    </section>
    <h2 class="nosotrosU">Un poco de nuestra historia</h2>
    <section>
        <div>
            <img src="images/NI11.png" align="right" alt="Logo 2"/>
            <br/>
            <p class="lead">En el corazón de nuestra historia yace el anhelo de simplificar la travesía 
                universitaria. Imagina un grupo de estudiantes de diversas disciplinas y universidades
                que, enfrentando desafíos similares, se reunieron con una visión audaz: crear un espacio
                digital donde la comunidad estudiantil pudiera compartir sabiduría, apoyo y conocimientos
                valiosos. Así nació nuestro blog universitario, forjado por la pasión de convertir las 
                experiencias personales en recursos compartibles.</p>
        </div>
    </section>
    <section>
        <div>
            <br/>
            <p class="lead">
                ¿Qué hace que nuestro sitio web sea único? Más allá de ofrecer consejos estándar, proporcionamos 
                un vistazo sin filtro a las experiencias de estudiantes reales. Desde la calidez del aula hasta 
                los desafíos del estudio remoto, cada entrada en nuestro blog es una ventana abierta a la autenticidad 
                universitaria. Nos enorgullece no solo brindar consejos prácticos, sino también fomentar la conexión entre 
                estudiantes, creando una comunidad en la que todos se sientan escuchados y comprendidos.
            </p>
        </div>

    </section>
    <img src="images/N2.png" alt="Fondo de Nosotros"/>
    <section>
        <!-- Tercer bloque de texto -->
        <div>
            <img src="images/NI3.png" align="left" alt="Logo 3"/>
            <br/>
            <p class="lead">Además, te ofrecemos la oportunidad de explorar tu camino 
                académico con nuestro test vocacional. Descubre tus fortalezas, 
                intereses y posibles direcciones profesionales. Únete a nuestra comunidad,
                donde la experiencia estudiantil cobra vida a través de consejos,
                evaluaciones, reseñas y la exploración de posibilidades académicas.
                ¡Haz que tu viaje universitario sea excepcional!</p>
        </div>
    </section>
    <img src="images/NFINAL.png" alt="Fondo de Nosotros"/>

    <footer>
        <ul>
            <li class="footer-p"><a href="politica-privacidad.html">Política de privacidad</a></li>
            <li><a href="terminos-condiciones.html">Términos y condiciones</a></li>
            <p>&copy; 2023 Blog Universitario. Todos los derechos reservados
        </ul>
    </footer>
</body>
</html>
