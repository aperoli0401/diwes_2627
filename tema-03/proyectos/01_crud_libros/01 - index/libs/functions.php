<?php

/*
    Librería: functions.php
    Funciones auxiliares para el proyecto CRUD de libros.

    Funciones incluidas:
        - get_Libros(): Devuelve un array con todos los libros.
        - obtener_id_nuevo_libro($libros): Devuelve el ID del nuevo libro creado.
*/

// Función get_Libros(): Devuelve un array con todos los libros creados.
function get_Libros() {
    // Array de libros
    $libros = [
        [
            'id' => 1,
            'titulo' => 'Cien años de soledad',
            'autor' => 'Gabriel García Márquez',
            'editorial' => 'Editorial Sudamericana',
            'genero' => ['Realismo mágico', 'Novela'],
            'precio' => 19.99
        ],
        [
            'id' => 2,
            'titulo' => '1984',
            'autor' => 'George Orwell',
            'editorial' => 'Secker & Warburg',
            'genero' => ['Distopía', 'Ciencia ficción'],
            'precio' => 14.99
        ],
        [
            'id' => 3,
            'titulo' => 'El gran Gatsby',
            'autor' => 'F. Scott Fitzgerald',
            'editorial' => 'Charles Scribner\'s Sons',
            'genero' => ['Novela', 'Tragedia'],
            'precio' => 12.99
        ],
        [
            'id' => 4,
            'titulo' => 'Don Quijote de la Mancha',
            'autor' => 'Miguel de Cervantes',
            'editorial' => 'Francisco de Robles',
            'genero' => ['Novela', 'Aventura'],
            'precio' => 24.99
        ],
        [
            'id' => 5,
            'titulo' => 'La Odisea',
            'autor' => 'Homero',
            'editorial' => 'Editorial Gredos',
            'genero' => ['Épica', 'Poesía'],
            'precio' => 17.99
        ]
    ];

    return $libros;
}

// Función obtener_id_nuevo_libro($libros): Devuelve el ID del nuevo libro creado.
function obtener_id_nuevo_libro($libros) {
    // Obtener el último libro del array
    $ultimo_libro = end($libros);

    // Obtener el ID del último libro
    $ultimo_id = $ultimo_libro['id'];

    // Devolver el ID del nuevo libro (último ID + 1)
    return $ultimo_id + 1;
}