<?php

/*
ew.php

Permite crear un nuevo libro en el proyecto CRUD de libros.

@package CRUD Libros
@author Alejandro Peralta
@version 1.0

Tabla libros : 
    - id (INT, PRIMARY KEY, AUTO_INCREMENT)
    - titulo (VARCHAR(255))
    - autor (VARCHAR(255))
    - editorial (VARCHAR(255))
    - genero (VARCHAR(255))
    - precio (DECIMAL(10,2))

    */

// Cargar librerias 
require_once 'libs/functions.php';

// Models 


// Negociado
$libros = get_Libros();

// Views
include 'views/new.view.php';

