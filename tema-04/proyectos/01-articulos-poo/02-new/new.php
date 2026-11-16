<?php

/**
 * new.php
 *
 * Página principal del proyecto CRUD de artículos. Nos permite incluir un nuevo articulo a la tabla
 *
 * @package    CRUD Artículos
 * @author     Tu Nombre
 * @version    1.0
 *
 * Tabla artículos:
 *  - id
 *  - descripcion
 *  - modelo
 *  - marca
 *  - categorias (array)
 *  - unidades
 *  - precio
 */

// Cargar clases
require_once __DIR__ . '/class/Articulo.php';
require_once __DIR__ . '/class/Tarticulos.php';

// Models - no lo necesitamos NO BASE DE DATOS

// 1. Crear un array de objetos de la clase Articulo
$tabla_articulos = new Tarticulos();

// 2. Añadir artículos al array
$tabla_articulos->addArticulos();

// 3. Obtener el array de artículos
$articulos = $tabla_articulos->getTarticulos();

// 4. Obtener el array de marcas - es  metodo estático, no necesitamos crear un objeto de la clase Tarticulos
$marcas = Tarticulos::getMarcas();

// 5. Obtener el array de categorías - es  metodo estático, no necesitamos crear un objeto de la clase Tarticulos
$categorias = Tarticulos::getCategorias();

// Views
// Cambiamos la vista del controlador
include __DIR__ . '/views/new.view.php';
