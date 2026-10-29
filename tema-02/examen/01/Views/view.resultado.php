<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <!-- css bootstrap básico 5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- icons bootstrap 1.13.1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css">
  </head>
  <body>
    <!-- capa principal de la aplicación -->
    <div class="container mt-3">

        <!-- cabecera de la aplicación -->
        <header class="bg-primary text-white p-3 mb-3">
            <i class="bi bi-stack"></i>
            <span class="fs-6">Examen práctico 03 - Movimiento rectilíneo uniformemente acelerado</span>
        </header>
    
        <!-- contenido principal de la aplicación -->
        <main>
            <div class="content">
                <tr>
                    <th>Resultados</th>
                </tr>

                <tr>
                    <th>Magnitudes</th>
                    <td>Velocidad inicial</td>
                    <td><?=  $velocidad_inicial ?>?></td>
                    <td>m/s</td>
                </tr>

                <tr>
                    <td>Aceleración</td>
                    <td><?= $aceleracion ?>?></td>
                    <td>m/s2</td>
                </tr>

                <tr>
                    <td>Tiempo</td>
                    <td><?= $tiempo ?>?></td>
                    <td>s</td>
                </tr>

                <tr>
                    <td>Masa</td>
                    <td><?= $masa ?>?></td>
                    <td>kg</td>
                </tr>

                <tr>
                    <th>Resultados</th>
                </tr>

                <tr>
                    <td>Velocidad final</td>
                    <td><?= $velocidad_final ?>?></td>
                    <td>m/s</td>
                </tr>

                <tr>
                    <td>Espacio recorrido</td>
                    <td><?= $espacio_recorrido ?></td>
                    <td>m</td>
                </tr>
                <tr>
                    <td>Fuerza neta</td>
                    <td><?= $fuerza_neta ?></td>
                    <td>N</td>
                </tr>
                <tr>
                    <td>Energía cinética</td>
                    <td><?= $energia_cinetica ?></td>
                    <td>J</td>
                </tr>



            </div>

        </main>
        
        <!-- pie de página de la aplicación -->
        <footer class="footer mt-auto py-3 fixed-bottom bg-light">
            <div class="container">
                <span class="text-muted">&copy; 2026
                    Alejandro Peralta Oliva - DWES - 2º DAW - Curso 26/27
                </span>
            </div>
        </footer>

        <!-- js bootstrap básico 5.3.8 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    
    </div>
  </body>
</html>