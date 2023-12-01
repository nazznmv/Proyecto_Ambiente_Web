<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/consejos.css">
    <title>Foro para Estudiantes</title>
</head>
<body>
    <header class="header">
        <h1 class="logo"><a href="index.php">Universiblog &nbsp<span>Tu Portal Informativo</span></a></h1>
        <ul class="main-nav">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="consejos.php">Consejos</a></li>
            <li><a href="evaluacion_profes.php">Evaluaciones</a></li>
            <li><a href="horarios.php">Horarios</a></li>
            <li><a href="resenha_uni.php">Reseña</a></li>
            <li><a href="test_vocacional.php">Test</a></li>
            <li><a href="nosotros.php">Nosotros</a></li>
        </ul>
    </header> 

    <h1 class="titulo-foro">Foro para Estudiantes</h1>
    <h1>Agregar Consejo</h1>
    <form action="procesar_consejos.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos"><br><br>
        <div class="form-floating">
            <label for="comentario">Comentario:</label><br>
            <textarea class="form-control" id="comentario" name="comentario" rows="4" cols="50" required
                placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
        </div>
        
        <input type="submit" value="Enviar">
    </form>
    <a href="consejos.php">Volver al Inicio</a>
</body>
</html>
