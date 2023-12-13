<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include("conexion_db.php");

    if (isset($_POST["nombre"]) && isset($_POST["apellidos"])&& isset($_POST["correo"]) && isset($_POST["password"])) {
        $nombre = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];
        $correo = $_POST["correo"];
        $password = $_POST["password"];
         // Hashear la contraseña antes de almacenarla en la base de datos
         $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
         $sql = "INSERT INTO registro (nombre, apellidos, correo, password) VALUES ('$nombre', '$apellidos','$correo', '$hashed_password')";
        
        if ($conn->query($sql) === TRUE) {
            echo "Registro agregado con éxito.";
            header("Location: index.php");
        } else {
            echo "Error al agregar registro: " . $conn->error;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/h&f.css">
    <link rel="stylesheet" href="fuentes/font.css">
    <link rel="stylesheet" href="css/registro.css">
    <style>
        .vertical-line {
    border-left: 1px solid #ccc;
    height: 100%;
}
        </style>
</head>
<body>
 
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
    <section  class="container-fluid align-center">
    <div class="container">
    <div class="row">
        <div class="col-md-5">
        <div class="form-register">
                    <h1 class="titulo-foro-registro">Formulario Registro</h1>
                    <form action="registro.php" method="post">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <input class="controls" type="text" name="nombre" id="nombre" placeholder="Ingrese su Nombre">
                <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Ingrese su Apellido">
                <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su Correo">
                <input class="controls" type="password" name="password" id="password" placeholder="Ingrese su Contraseña">
               
                <p style="font-size:14px;">Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
               
                <input class="botons" type="submit" value="Registrar">
               
                <p><a href="#">¿Ya tengo Cuenta?</a></p>
            </form>
           
        </div>
        </div>
        <br>
        <div class="col-md-1">
        <div class="vertical-line"></div>
 
        </div>
 
        <div class="col-md-4">
         <div class="login-container pl-1">
                    <h1 class="titulo-foro-registro">Iniciar Sesión</h1>
                    <form id="loginForm" action="login.php" method="POST">
        <label for="inputEmail">Nombre de usuario:</label>
        <input type="email"  name="correo" id="inputEmail" required><br><br>
 
        <label for="Password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br><br>
 <br><br>
        <input class="botons" type="submit" value="Iniciar Sesión">
    </form>
</div>
</div>
        </div>
       
 
 
 
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>