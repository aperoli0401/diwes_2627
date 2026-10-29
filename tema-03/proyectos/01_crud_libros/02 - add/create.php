<?php

/*
create.php

Permite crear un nuevo libro en el proyecto CRUD de libros.
Apartir de los datos envidados por el formulario, se crea un nuevo libro y se guarda en la base de datos.

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

// Extraer los datos del formulario
$titulo = htmlspecialchars($_POST['titulo'] ?? '');
$autor = htmlspecialchars($_POST['autor'] ?? '');
$editorial = htmlspecialchars($_POST['editorial'] ?? '');
$genero = htmlspecialchars($_POST['genero'] ?? '');
$precio = floatval($_POST['precio'] ?? 0.00);

// Proceso de validación de los datos del formulario


// Crear array asociativo del nuevo libro
$nuevo_libro = [
    'id' => count(get_Libros()) + 1, // Generar un nuevo ID basado en la cantidad de libros existentes
    'titulo' => $titulo,
    'autor' => $autor,
    'editorial' => $editorial,
    'genero' => explode(',', $genero), // Convertir la cadena de géneros en un array
    'precio' => $precio
];

// Obtener el array de libros existentes
$libros = get_Libros();

// Obtener id del nuevo libro creado
$nuevo_id = obtener_id_nuevo_libro($libros);



// Views
require_once 'views/index.view.php';

