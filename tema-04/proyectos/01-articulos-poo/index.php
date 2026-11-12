<?php

/**
 * index.php
 * 
 * Pagina principal del proyecto CRUD de artículos. Muestra la tabla de artículos, cada artículo es un objeto
 * 
 * @package : proyecto41
 * @author : Alejandro Peralta Oliva 
 * @version : 1.0
 * 
 * Tabla articulos:
 *   -id
 *   -descripcion
 *   -modelo
 *   -marca
 *   -categoria
 *   -unidades
 *   -precio
 * 
 */

// Cargar clases 
require_once __DIR__ . '/class/Articulo.php';
require_once __DIR__ . '/class/Tarticulos.php';

// Models - no lo necesitamos NO BASE DE DATOS

// 1. Crar un array de objetos de la clase Articulo
$tabla_articulos = new Tarticulos();

// 2. Añadir artículos del array
$tabla_articulos -> addArticulos();

// 3. Obtener el array de artículos 
$articulos = $tabla_articulos->getTarticulos();

// 4. Obtener el array de marcas 
$marcas = Tarticulos::getMarcas();

// 5. Obtener el array de categorías
$categorias = Tarticulos::getCategorias();