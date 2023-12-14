<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/h&f.css">
    <link rel="stylesheet" href="css/consejos.css">
    <link rel="stylesheet" href="fuentes/font.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Foro para Estudiantes</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="js/script_consejo.js"></script>

    <script>
        $(document).ready(function(){
            $("#btnMostrarFormulario").click(function(){
                $("#formularioConsejo").toggle();
            });
        });
    </script>

    <style>
.p-formatc a{
    margin: 2em 9em;
    font-size: 30px;

    transition: font-size 0.3s;

  }
  .p-formatc a:hover{
 
    font-size: 36px;

  }
  #btnMostrarFormulario{
  text-decoration: none; /* Elimina el subrayado del texto */
    border-radius: 5px; 
    font-family:Poppins-Bold; 
}

.card-body{
    background-image: url('images/borde.png'); /* Reemplaza con la ruta correcta de tu imagen */
    background-position: center center; /* Ajusta la posición de la imagen al centro del body */
    background-repeat: repeat; /* Evita la repetición de la imagen */
    width: 100%; /* Ajusta el ancho de la tarjeta según tus necesidades */
    height: 140px; /* Ajusta la altura de la tarjeta según tus necesidades */

}
.card img {
    width: 100%; /* Ajusta el ancho de la imagen dentro de la tarjeta según tus necesidades */
    height: auto; /* Mantiene la proporción de la imagen y ajusta automáticamente la altura */
}
  
    </style>
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
<img src="images/EDOC.png" alt=""/>
    <br>
    <div class="p-format"><p style="font-size: 50px">¡Mira qué evaluaciones tienen tus profesores!</p></div>
    
    <br>

<div class="container mt-4">
        <!-- Mostrar los comentarios aquí -->
        <div class="row" id="comentariosContainer">
        <?php
            include("conexion_db.php");

            $sql = "SELECT universidad, nombre_docente, curso, carrera, experiencia FROM evaluacion";
            $result = $conn->query($sql);

            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='col-md-6 mb-3'>
                        <div class='card'>
                            <div class='card-body'>
                                <h5 class='card-title' style='font-family: Poppins-Bold'>" . $row['universidad'] . "</h5>
                                <h5 class='card-text' style='font-family: Poppins-regular'>" . $row['nombre_docente'] . "</h5>

                                <h7 class='card-text' style='font-family: Poppins-regular'>" . $row['curso'] . " ".' - '."" . $row['carrera'] . "</h7>
                                <p class='card-text' style='font-family: Poppins-regular'>".'" '."" . $row['experiencia'] . "".' "'."</p>
                            
                            </div>
                        </div>
                    </div>";
                }
            } else {
                echo "<p>No hay evaluaciones aún.</p>";
            }

            $conn->close();
            ?>
        </div>
    </div>

    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>