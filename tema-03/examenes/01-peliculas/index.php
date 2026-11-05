<?php 

/**
 * Alejandro Peralta Oliva
 * Examen práctico tema 3 - CRUD películas 
 */

// Cargamos las librerias
require_once 'libs/functions.php';

// Modelo

// Negociado
// obtener_id_nuevo_pelicula($peliculas = []);
$peliculas = get_peliculas();

// Vista 
require_once 'views/index.view.php';