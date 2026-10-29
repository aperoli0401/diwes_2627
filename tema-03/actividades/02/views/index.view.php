<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actividad 3.2</title>

    <!-- css bootstrap básico 5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- icons bootstrap 1.13.1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <!-- Capa principal de la aplicación -->
    <div class="container mt-3">

        <!-- cabecera de la aplicación -->
        <header class="bg-primary text-white p-3 mb-3">
            <i class="bi bi-stack"></i>
            <span class="fs-6">Actividad 3.2 - Formulario Registro</span>
        </header>

        <!-- contenido principal de la aplicación -->
        <main>
            <div class="content">
                <!-- Formulario de registro de usuario con acceso según perfil de usuario -->
                <h2>Formulario de registro</h2>
                <form action="acceso.php" method="post">
                    <!-- Campo nombre usuario -->
                    <div class="mb-3">
                        <label for="exampleInputName1">Nombre usuario</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Enter name" name="name">
                    </div>
                    <!-- Campo email -->
                    <div class="mb-3">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <!-- campo perfil -->
                    <div class="mb-3">
                        <label for="exampleInputProfile1">Perfil de usuario</label>
                        <select class="form-select" id="exampleInputProfile1" name="profile">
                            <option selected disabled>Selecciona un perfil</option>
                            <?php foreach ($perfiles as $perfil): ?>
                                <option value="<?php echo $perfil; ?>"><?php echo ucfirst($perfil); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <!-- Password -->
                    <div class="mb-3">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </main>
        <!-- pie de pagina de la aplicación -->
        <footer class="footer mt-auto py-3 fixed-bottom bg-light">
            <div class="container">
                <span class="text-muted">&copy; 2026 Alejandro Peralta Oliva - DWES - 2º DAW Curso 2026-2027</span>
            </div>
        </footer>
        <!-- js bootstrap básico 5.3.8 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    </div>
</body>

</html>