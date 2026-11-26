<?php

// Cargamos las clases
require_once __DIR__ . '/class/Libro.php';
require_once __DIR__ . '/class/TablaLibros.php';

// Instanciamos la tabla libros
$TablaLibros = new TablaLibros();

// Cargamos los libros
$TablaLibros->Tlibros = TablaLibros::addLibros();

// Obtenemos el array de libros 
$libros = $TablaLibros->Tlibros;

// Cargamos las vistas del proyecto 
require_once __DIR__ . '/views/index.view.php';
