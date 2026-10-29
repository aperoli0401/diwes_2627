<?php

/* 
    ejemplo 35. 
    descripción. if alternativo para plantillas HTML

    dependiendo del perfil se motrará un menú de acciones u otro
    Tipos de perfiles:
        - Admin
        - User
*/

// Models

// Negociado
$perfil = 'admin';

// Vista
include 'views/index.view.php';