    <?php

    /*
        ejemplo 35.Actividad 32
        Descripcion: Formulario de registro con acceso según perfil de usuario

        Formulario de registro:
            - Nomber usuario
            - Email
            - Contraseña o password
            - Perfil de usuario (admin, edir, user)

        TIpos de perfiles y privilegios:
            - Admin : Añadir, eliminar, actualizar y consultar
            - Edit : Añadir, actualizar y consultar
            - User : Consultar
    */


// Models 

// Negociado
// Obtener los detalles del formulario de registro
$usuario = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$perfil = $_POST['perfil'] ?? '';

// Validación de los datos del formulario


// Vista
include 'views/acceso.view.php';