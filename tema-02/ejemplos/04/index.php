<?php 
    $nombre = "Juan";
    $apellidos = "Pérez Lopez";
    $edad = 30;
    $poblacion = "Madrid";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
    <h1>Ficha alumnos:</h1>
    <!-- Muestro los detalles del alumno -->
    <p>Nombre: <?php echo $nombre;?> </p>
    <p>Apellidos: <?php echo $apellidos;?> </p>
    <p>Edad: <?php echo $edad;?> </p>
    <p>Población: <?php echo $poblacion;?> </p>
</body>
</html>