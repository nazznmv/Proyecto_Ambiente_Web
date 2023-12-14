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
          .mb-3 {
    text-align: center; 
}

/* Estilo para los enlaces de filtro */
.mb-3 a {
    display: inline-block; /* Hace que los enlaces se muestren en línea */
    margin: 5px; 
    padding: 10px 20px; 
    background-color: purple; 
    color: #fff; 
    text-decoration: none; /* Elimina el subrayado del texto */
    border: none; 
    border-radius: 5px; 
    font-family:Poppins-regular;
}
.card-body{
    background-image: url('images/fondoU.png'); /* Reemplaza con la ruta correcta de tu imagen */
    background-position: center center; /* Ajusta la posición de la imagen al centro del body */
    background-repeat: no-repeat; /* Evita la repetición de la imagen */
    background-attachment: fixed; /* Fija la imagen de fondo, para que no se desplace con el contenido */} 

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
<img src="images/UNIVERSIDAD.png" alt=""/>
    <br>
    <div class="p-format"><p style="font-size: 50px">¡Conoce las distintas Universidades que hay!</p></div>
    <div class="p-format2"><p>Aquí podrás ver todas las Universidades que tiene Costa Rica para ofreces, desde públicas hasta privadas,
        visita los sitios web que cada una de estas ofrecen 
    
        </p></div>
    <br>
   <!-- Filtros -->
<div class="mb-3">
        <a href="universidades.php?filtro=todas" class="btn btn-primary">Mostrar Todas</a>
        <a href="universidades.php?filtro=publica" class="btn btn-warning">Mostrar Públicas</a>
        <a href="universidades.php?filtro=privada" class="btn btn-success">Mostrar Privadas</a>
    </div> 

    <div class="container mt-4">
        <!-- Mostrar los nombre de u aquí -->
        <div class="row" id="comentariosContainer" style="font-family:Poppins-regular;">
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "1234";
    $database = "proyecto";
    
    $conn = new mysqli($servername,$username,$password,$database);

// Verifica la conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$filtro = isset($_GET['filtro']) ? $_GET['filtro'] : 'todas';

if ($filtro == 'publica') {
    $consulta = "SELECT nombre FROM universidad WHERE nivel = 1";
} elseif ($filtro == 'privada') {
    $consulta = "SELECT nombre FROM universidad WHERE nivel = 0";
} else {
    $consulta = "SELECT nombre FROM universidad";
}

$resultado = $conn->query($consulta);

if ($resultado->num_rows > 0) {
    // Imprimir los datos de cada fila
    while ($row  = $resultado->fetch_assoc()) {
        echo "<div class='col-md-6 mb-3'>
        <div class='card'>
            <div class='card-body'>
                <h5 class='card-title'>" . $row['nombre'] .  "</h5>
            </div>
        </div>
    </div>";
    }
} else {
    echo "0 resultados";
}

$conn->close();
?>

</div>
    </div>
    

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>