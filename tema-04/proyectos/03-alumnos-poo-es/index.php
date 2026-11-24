<?php

/**
 * index.php
 *
 * Página principal del proyecto CRUD de artículos. Muestra la tabla de artículos, cada artículo es un ob
 *
 * @package    CRUD Alumnos
 * @author     Alejandro Peralta Oliva
 * @version    1.0
 *
 * Tabla artículos:
 *  - id
 *  - nombre
 *  - apellidos
 *  - email
 *  - fecha nacimiento
 *  - curso
 *  - asignaturas
 */

// 1. Cargamos las clases del modelo
require_once __DIR__ . '/class/Alumnos.php';
require_once __DIR__ . '/class/TablaAlumnos.php';

// 2. Instanciamos la tabla de alumnos
$tabla_alumnos = new TablaAlumnos();

// 3. Cargamos los alumnos de prueba asigando directamente a la propiedad pública
$tabla_alumnos->talumnos = TablaAlumnos::addAlumnos();

// 4. Obtenemos el array de alumnos directamente desde la propiedad pública
$alumnos = $tabla_alumnos->talumnos;

// 5. Obtenemos el catálogo de cursos y asignaturas
$cursos = TablaAlumnos::getCursos();
$asignaturas = TablaAlumnos::getAsignaturas();

// 6. Cargamos la vista del listado
require_once __DIR__ . '/views/index.view.php';