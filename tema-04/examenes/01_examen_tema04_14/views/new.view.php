<!doctype html>
<html lang="es">

<head>
    <!-- head -->
    <title>Examen 4.1 - CRUD Libros - POO Sin Encapsulamiento</title>
    <?php require_once __DIR__ . '/layouts/head.layout.php' ?>
</head>

<body>
    <div class="container mt-3">

        <!-- header -->
        <?php require_once __DIR__ . '/partials/header.partial.php' ?>

        <main>
            <div class="content">
                <legend>Formulario Nuevo Libro</legend>

                <form action="create.php" method="post">
                    <!-- titulo -->
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título:</label>
                        <input type="text" class="form-control" id="titulo" required>
                    </div>
                    <!-- fecha publicacion -->
                    <div class="mb-3">
                        <label for="fecha_publicacion" class="form-label">Fecha de publicación:</label>
                        <input type="date" class="form-control" id="fecha_publicacion" required>
                    </div>
                    <!-- autor -->
                    <div class="mb-3">
                        <label for="autor" class="form-label">Autor:</label>
                        <input type="text" class="form-control" id="autor" required>
                    </div>
                    <!-- Categoria -->
                    <!-- Genera dinámicamente el select de categorías a partir del array $categorias -->
                    <div class="mb-3">
                        <label for="categoria" class="form-label">Categoría:</label>
                        <button class="form-control combobox-toggle" type="button"
                            data-bs-toggle="combobox"
                            data-bs-name="categoria"
                            data-bs-placeholder="Seleccione Categoría …">
                            <span class="combobox-value">Seleccione Categoría ...</span>
                            <svg class="combobox-caret" width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.46967 5.46967C0.762563 5.17678 1.23744 5.17678 1.53033 5.46967L5 8.93934L8.46967 5.46967C8.76256 5.17678 9.23744 5.17678 9.53033 5.46967C9.82322 5.76256 9.82322 6.23744 9.53033 6.53033L5.53033 10.5303C5.23744 10.8232 4.76256 10.8232 4.46967 10.5303L0.46967 6.53033C0.176777 6.23744 0.176777 5.76256 0.46967 5.46967Z" fill="currentcolor" />
                            </svg>
                        </button>
                        <div class="menu">
                            <!-- lista dinámica de categorías -->
                             <?php foreach ($categorias as $categoria): ?>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="<?= $categoria ?>" name="etiquetas[]" value="<?= $categoria ?>">
                                    <label class="form-check-label" for="<?= $categoria ?>">
                                        <?= $categoria ?>
                                    </label>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- etiquetas -->
                    <div class="mb-3">
                        <label class="form-label">Etiquetas:</label>
                        <!-- lista dinámica de etiquetas -->
                        <div class="form-check" id="etiquetas">
                            <?php foreach ($etiquetas as $etiqueta): ?>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="<?= $etiqueta ?>" name="etiquetas[]" value="<?= $etiqueta ?>">
                                    <label class="form-check-label" for="<?= $etiqueta ?>">
                                        <?= $etiqueta ?>
                                    </label>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- numero_paginas -->
                    <div class="mb-3">
                        <label for="numero_paginas" class="form-label">Número de páginas:</label>
                        <input type="number" min="1" step="1" class="form-control" id="numero_paginas"  required>
                    </div>
                    <!-- stock -->
                    <div class="mb-3">
                        <label for="stock" class="form-label">Stock:</label>
                        <input type="number" min="0" step="1" class="form-control" id="stock"  required>
                    </div>
                    <!-- precio -->
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio:</label>
                        <input type="number" min="0" step="0.01" class="form-control" id="precio" required>
                    </div>
                    <br>
                    <div class="btn-group" role="group">
                        <a class="btn-solid theme-danger" href="index.php" role="button">Cancelar</a>
                        <button type="reset" class="btn-solid theme-warning">Borrar</button>
                        <button type="submit" class="btn-solid theme-primary">Guardar Libro</button>
                    </div>
                </form>
            </div>
        </main>

       <!-- footer y js_bootstrap -->
        <?php require_once __DIR__ . '/partials/footer.partial.php' ?>
        <?php require_once __DIR__ . '/layouts/js_bootstrap.layout.php' ?>
    </div>
</body>

</html>
