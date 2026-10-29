<?php 
    $nombre = "Juan";
    $apellidos = "Pérez Lopez";
    $edad = 30;
    $poblacion = "Madrid";
    $casado = true;
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
    <?php
        // Comillas dobles 
        echo "<p>Nombre: $nombre</p>";

        // Comillas simples
        echo '<p>Nombre: $nombre</p>';

        // solución uso comillas simples y concatenación
        echo '<p>Nombre: </p> . $nombre .';
    ?>
</body>
</html>