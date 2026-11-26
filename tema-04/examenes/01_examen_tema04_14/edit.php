<?php

// Cargamos las clases 
require_once __DIR__ . '/class/Libro.php';
require_once __DIR__ . '/class/TablaLibros.php';

// Recogemos el id con el get y lo asignamos a entero
$id = (int) [_GET ($id) ?? null];

