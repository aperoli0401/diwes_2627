<?php

/**
 * filter.php
 *
 * permite filtrar la table de libros a partir de una expresión regular que pasa por la URL
 *
 * @package    CRUD Libros
 * @author     Tu Nombre
 * @version    1.0
 * 
 * Tabla  libros:
    *  - id (INT, PRIMARY KEY, AUTO_INCREMENT)
    *  - titulo (VARCHAR(255))
    *  - autor (VARCHAR(255))
    *  - editorial (VARCHAR(255))
    *  - generos 
    *  - precio 

*/

// Cargar librerias
require_once 'libs/functions.php';

// Models

// Negociado
// Obtener el prompt de búsqueda que se pasa por la URL
// filter.php?prompt=cervantes
$prompt = htmlspecialchars($_GET['prompt'] ?? null); 

// Validar la expresión regular

// Cargar el array de libros
$libros = get_libros();


// Filtrar el array de libros a partir del prompt
$aux = [];
foreach ($libros as $libro){
    // Recorro cada campo del libro
    if (array_search($prompt , $libro) !== false){
        // Si el libro contiene la expresión de búsqueda,
        // añado el libro al array auxiliar
        $aux[] = $libro;
    }
}

$libros = $aux;

// Cargo la vista de edición con los detalles del libro a ordenar
require_once 'views/index.view.php';
