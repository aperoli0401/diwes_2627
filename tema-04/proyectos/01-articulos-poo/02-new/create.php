<?php

/**
 * create.php
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

// Recogemos los datos enviados desde el formulario mediante el metodo POST
$descripcion = $_POST['descripcion'] ?? '';
$modelo = $_POST['modelo'] ?? '';
$marca = $_POST['marca'] ?? '';
$categorias = $_POST['categorias'] ?? [];
$unidades = $_POST['unidades'] ?? 0;
$precio = $_POST['precio'] ?? 0;

// Creamos la instancia sobre los datos reibidos y luego añadimos el nuevo articulo llamando al metodo addArticulo
$articulo = new Articulo($descripcion, $modelo, $marca, $categorias, $unidades, $precio);
Tarticulos::addArticulo($articulo);

// Views
// Cambiamos la vista del controlador
include __DIR__ . '/views/new.view.php';
