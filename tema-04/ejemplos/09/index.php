<?php

/*
    Clase padre : Producto
    Clase hija : Libro sin constructor
*/

require_once __DIR__ . 'class/Producto.php';

// Ejecuta el constructor de la clase padre Producto
$libro1 = new Libro(1, 'El Quijote', 19.99, 'Novela', 5);

echo $libro1 -> getResumen();