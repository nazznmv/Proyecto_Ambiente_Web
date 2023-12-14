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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include("conexion_db.php");
    
    $nombre = $_POST['nombre'] ?? '';
    $apellidos = $_POST['apellidos'] ?? '';
    $correo = $_POST['correo'] ?? '';
    $genero = $_POST['generoSeleccionado'] ?? '';
    $profesiones = array(
        "Ingeniero" => array(
            "valores" => array("honestidad", "responsabilidad"),
            "actitudes" => array("perseverancia"),
            "liderazgo" => array("trabajo_equipo")
        ),
        "Maestro" => array(
            "valores" => array("honestidad"),
            "actitudes" => array("positividad"),
            "liderazgo" => array("trabajo_equipo")
        ),
        // Otras profesiones con sus requisitos
    );

    $valoresElegidos = isset($_POST['valores']) ? (array)$_POST['valores'] : array();
    $actitudElegida = isset($_POST['actitudes']) ? $_POST['actitudes'] : "";
    $liderazgoElegido = isset($_POST['liderazgo']) ? (array)$_POST['liderazgo'] : array();

    $profesionesRecomendadas = array();

    foreach ($profesiones as $profesion => $requisitos) {
        $cumpleRequisitos = true;

        // Comparar respuestas del usuario con requisitos de la profesión
        foreach ($valoresElegidos as $valor) {
            if (!in_array($valor, $requisitos['valores'])) {
                $cumpleRequisitos = false;
                break;
            }
        }

        if (!in_array($actitudElegida, $requisitos['actitudes'])) {
            $cumpleRequisitos = false;
        }

        foreach ($liderazgoElegido as $liderazgo) {
            if (!in_array($liderazgo, $requisitos['liderazgo'])) {
                $cumpleRequisitos = false;
                break;
            }
        }

        if ($cumpleRequisitos) {
            $profesionesRecomendadas[] = $profesion;
        }
    }
    
    echo '<link rel="stylesheet" href="css/css.css">';
    echo "<div class='contenedor-con-imagen'>
        <div class='mensaje'>";

    if (empty($profesionesRecomendadas)) {
        echo "<div class='mensaje-error'>Lo siento, $nombre $apellidos, no hay coincidencias con tus respuestas.</div>";
    } else {
        echo "<div class='mensaje-exito'>Hola $nombre $apellidos, basado en tus respuestas, las profesiones recomendadas para ti como $genero son: ";
        echo implode(", ", $profesionesRecomendadas);
        echo "</div>";
    }
    
    echo "</div>
      </div>";
}
?>