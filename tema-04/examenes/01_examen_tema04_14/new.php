<?php

// Cargamos las clases
require_once __DIR__ . '/class/Libro.php';
require_once __DIR__ . '/class/TablaLibros.php';

//  Obtenemos etiquetas y categorias
$etiquetas = TablaLibros::getEtiquetas();
$categorias = TablaLibros::getCategorias();

// Cargamos las vistas
require_once __DIR__ . '/views/new.view.php';