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

    <?php 
        // Mostrar los valores de las variables en HTML
        echo "<p><strong>Nombre:</strong> " . $nombre . "</p>";
        echo "<p><strong>Apellidos:</strong> " . $apellidos . "</p>";
        echo "<p><strong>Edad:</strong> " . $edad . "</p>";
        echo "<p><strong>Población:</strong> " . $poblacion . "</p>";
    ?> 
</body>
</html>