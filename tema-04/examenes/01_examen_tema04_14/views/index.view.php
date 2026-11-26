<!doctype html>
<html lang="es">

<head>
    <!-- Head layout -->
    <title>Proyecto 4.3 - CRUD Libros - POO Sin Encapsulamiento</title>
    <?php require_once __DIR__ . '/layouts/head.layout.php' ?>
</head>

<body>
    <div class="container mt-3">

       <!-- header y menu partial -->
       <?php require_once __DIR__ . '/partials/header.partial.php' ?>
       <?php require_once __DIR__ . '/partials/menu.partial.php' ?>

        <main>
            <div class="content">
                <legend>Tabla de libros - POO</legend>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="text-end">Id</th>
                            <th scope="col">Título</th>
                            <th scope="col">Publicación</th>
                            <th scope="col">Autor</th>
                            <th scope="col">Categoría</th>
                            <th scope="col">Etiquetas</th>
                            <th scope="col" class="text-end">Páginas</th>
                            <th scope="col" class="text-end">Stock</th>
                            <th scope="col" class="text-end">Precio</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                       <!-- Detalles libros -->
                         <?php foreach ($Tlibros as $libro): ?>
                            <tr>
                                <td class="text-end"><?= $libro->getId() ?></td>
                                <td><?= $libro->getTitulo() ?></td>
                                <td><?= $libro->getPublicacion() ?></td>
                                <td><?= $libro->getAutor() ?></td>
                                <td><?= $libro->getCategoria() ?></td>
                                <td>
                                    <?php foreach ($libro->getEtiquetas() as $etiqueta): ?>
                                        <span class="badge bg-secondary"><?= $etiqueta ?></span>
                                    <?php endforeach; ?>
                                </td>
                                <td class="text-end"><?= $libro->getPaginas() ?></td>
                                <td class="text-end"><?= $libro->getStock() ?></td>
                                <td class="text-end"><?= number_format($libro->getPrecio(), 2) ?></td>
                                <td>
                                    <a href="edit.php?id=<?= $libro->getId() ?>" class="btn btn-sm btn-primary">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <a href="#" class="btn-solid theme-primary">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                    <a href="#" class="btn-solid theme-info">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>    
                    </tbody>
                    <tfoot>
                        <tr>
                            <td>Total</td>
                            <!-- mostrar el total de libros en la tabla -->
                            <td colspan="9"></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </main>

        <!-- footer y js bootstrap layout -->
        <?php require_once __DIR__ . '/partials/footer.partial.php' ?>
        <?php require_once __DIR__ . '/layouts/js_bootstrap.layout.php' ?>
    </div>
</body>

</html>
