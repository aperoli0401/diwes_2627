<?php

/*
edit.php

Permite editar un libro existenete en la tabla de libros

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
// Obtener el indice del libro a editar desde la URL
// edit.php?indice=0 - edito el primer libro
$indice = htmlspecialchars($_GET['indice'] ?? null);

// Validar el indice recibido


// Cargar el array de libros
$libros = get_Libros();

// Obtenemos el libro a editar
$libro = $libros[$indice];

// Cargo la vista de edición con los detalle del libro a editar
require_once 'views/edit.view.php';