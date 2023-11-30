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
    echo "<header class='header'>
            <h1 class='logo'><a href='index.html'>Universiblog &nbsp<span>Tu Portal Informativo</span></a></h1>
            <ul class='main-nav'>
                <li><a href='index.html'>Inicio</a></li>
                <li><a href='consejos.html'>Consejos</a></li>
                <li><a href='evaluacion_profes.html'>Evaluaciones</a></li>
                <li><a href='horarios.html'>Horarios</a></li>
                <li><a href='resenha_uni.html'>Reseña</a></li>
                <li><a href='test_vocacional.html'>Test</a></li>
                <li><a href='nosotros.html'>Nosotros</a></li>
            </ul>
        </header>";
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