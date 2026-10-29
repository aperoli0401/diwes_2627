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
    <p>Nombre: <?= $nombre;?> </p>
    <p>Apellidos: <?= $apellidos;?> </p>
    <p>Edad: <?= $edad;?> </p>
    <p>Población: <?= $poblacion;?> </p>
</body>
</html>