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
    <link rel="stylesheet" href="css/resenha.css">
    <link rel="stylesheet" href="fuentes/font.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Evaluación Docente</title>
    <style>
         .contenedor-evaluacion{
	width:50%;
	margin:auto;
	padding:5px;
	border: 1px solid #ccc;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    background-image: url('images/form.png'); /* Reemplaza con la ruta correcta de tu imagen */
    background-size: cover; /* Ajusta el tamaño de la imagen para cubrir todo el body */
    background-position: center center; /* Ajusta la posición de la imagen al centro del body */
    background-repeat: no-repeat; /* Evita la repetición de la imagen */
    size: 20px;   
}
#body_evaluacion {
    background-image: url('images/evaluacion.png'); /* Reemplaza con la ruta correcta de tu imagen */
    background-size: cover; /* Ajusta el tamaño de la imagen para cubrir todo el body */
    background-position: center center; /* Ajusta la posición de la imagen al centro del body */
    background-repeat: no-repeat; /* Evita la repetición de la imagen */
    background-attachment: fixed; /* Fija la imagen de fondo, para que no se desplace con el contenido */}

        
    </style>
</head>
<body id="body_evaluacion">
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
<br>
    <div class="p-format"><p style="font-size: 50px">¿CONOCES A TUS PROFESORES?</p></div>
    <div class="p-format2"><p>Si es así, comenta qué te parece la experiencia de haber llevado algún curso con ella/él
        y compartí tu experiencia con los demás!  
        </p></div>
<section class="form-resenha">

    <h1 class="h1-evaluacion">Evaluación de docentes</h1>
        <div class="contenedor-evaluacion">
            <form method="POST" action="procesar_evaluacion.php">
           
                <label for="nombre_docente">Nombre del docente:</label><br>
                <input type="text" id="nombre_docente" name="nombre_docente" required><br>

                <label for="curso">Curso que imparte:</label><br>
                <input type="text" id="curso" name="curso" required><br>

                <label for="carrera">Carrera:</label><br>
                <input type="text" id="carrera" name="carrera" required><br>

                <label for="experiencia">Experiencia:</label><br>
                <textarea id="experiencia" name="experiencia" rows="4" required></textarea><br>

                <button class="btn  btn-dark mt-3 mb-3 rounded-pill" style="background-color: rgba(47, 0, 62, 1)" type="submit">Enviar</button>
            </form>
    </div>
        </section>

    <footer>
        <ul>
            <li class="footer-p"><a href="politica-privacidad.html">Política de privacidad</a></li>
            <li><a href="terminos-condiciones.html">Términos y condiciones</a></li>
            <p>&copy; 2023 Blog Universitario. Todos los derechos reservados
        </ul>
    </footer>

</body>
</html>
