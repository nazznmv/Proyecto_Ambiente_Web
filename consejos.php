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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Foro para Estudiantes</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/script_consejo.js"></script>

    <script>
        $(document).ready(function(){
            $("#btnMostrarFormulario").click(function(){
                $("#formularioConsejo").toggle();
            });
        });
    </script>
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
<img src="images/consejo.png" alt=""/>
    <br>
    <br>
    <div class="d-grid gap-2 col-6 mx-auto">
    <button class="btn btn-dark mt-3 mb-3" id="btnMostrarFormulario">Agregar Consejo</button>
    </div>
    <div class="container">
    
    <div id="formularioConsejo" style="display: none;">
        <form action="procesar_consejos.php" method="POST">
        <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="apellidos" class="form-label">Apellidos:</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" required>
            </div>
            <div class="mb-3">
                <label for="comentario" class="form-label">Comentario:</label>
                <textarea class="form-control" id="comentario" name="comentario" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Compartir</button>
        </form>
    </div>
</div>
<div class="container mt-4">
        <!-- Mostrar los comentarios aquí -->
        <div class="row" id="comentariosContainer">
        <?php
            include("conexion_db.php");

            $sql = "SELECT nombre, apellidos, comentario FROM consejos";
            $result = $conn->query($sql);

            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='col-md-6 mb-3'>
                        <div class='card'>
                            <div class='card-body'>
                                <h5 class='card-title'>" . $row['nombre'] . " " . $row['apellidos'] . "</h5>
                                <p class='card-text'>" . $row['comentario'] . "</p>
                            </div>
                        </div>
                    </div>";
                }
            } else {
                echo "<p>No hay comentarios aún.</p>";
            }

            $conn->close();
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>