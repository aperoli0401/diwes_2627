<?php

/**
 * new.php
 *
 * Muestra el formulario para añadir un nuevo artículo al array de artículos. No se guarda en base de datos, solo en memoria.
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

// 1. Cargamos las clases 
require_once __DIR__ . '/class/Alumnos.php';
require_once __DIR__ . '/class/TablaAlumnos.php';

// 2. Obtenemos cursos y asignaturas con los métodos estáticos para rellenar el formulario
$cursos = TablaAlumnos::getCursos();
$asignaturas = TablaAlumnos::getAsignaturas();

// 3. Incluimos la vista del formulario de alta
require_once __DIR__ . '/views/new.view.php';
