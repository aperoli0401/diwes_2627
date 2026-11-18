<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto 4.1 - CRUD Artículos - POO Encapsulación</title>

    <!-- css bootstrap 6.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">

    <!-- icons bootstrap 1.13.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.2/font/bootstrap-icons.min.css">
</head>

<body>
    <!-- capa principal de la aplicación -->
    <div class="container mt-3">

        <!-- cabecera de la aplicación -->
        <header class="bg-primary text-white p-3 mb-3">
            <i class="bi bi-stack"></i>
            <span class="fs-6">Proyecto 4.1 - CRUD Artículos - POO Encapsulación</span>
        </header>

        <!-- contenido principal de la aplicación -->
        <main>
            <div class="content">
                <legend class="mb-3">Añadir nuevo artículo</legend>

                <form action="create.php" method="POST" class="row g-3">
                    <div class="col-md-6">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion" required>
                    </div>

                    <div class="col-md-6">
                        <label for="modelo" class="form-label">Modelo</label>
                        <input type="text" class="form-control" id="modelo" name="modelo" required>
                    </div>

                    <div class="col-md-6">
                        <label for="marca" class="form-label">Marca</label>
                        <select class="form-select" id="marca" name="marca" required>
                            <option value="" selected disabled>Seleccione una marca...</option>
                            <?php foreach ($marcas as $id => $nombre): ?>
                                <option value="<?= $id ?>"><?= $nombre ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="col-12">
                        <label class="form-label d-block">Categorías</label>
                        <div class="d-flex flex-wrap gap-3">
                            <?php foreach ($categorias as $id => $nombre): ?>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="categorias[]" value="<?= $id ?>" id="cat_<?= $id ?>">
                                    <label class="form-check-label" for="cat_<?= $id ?>">
                                        <?= $nombre ?>
                                    </label>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="unidades" class="form-label">Unidades</label>
                        <input type="number" class="form-control" id="unidades" name="unidades" min="0" required>
                    </div>

                    <div class="col-md-6">
                        <label for="precio" class="form-label">Precio (€)</label>
                        <input type="number" class="form-control" id="precio" name="precio" step="0.01" min="0" required>
                    </div>

                    <div class="col-12 mt-4">
                        <button type="submit" class="btn btn-primary">Guardar Artículo</button>
                        <a href="index.php" class="btn btn-secondary">Cancelar</a>
                    </div>
                </form>
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

        <!-- js bootstrap básico 6.0 -->
        <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>

    </div>
</body>

</html>