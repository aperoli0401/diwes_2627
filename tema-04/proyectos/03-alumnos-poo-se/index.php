<?php

/**
 * index.php
 * 
 * Página principal del proyecto CRUD de alumnos. Muestra la tabla de alumnos, cada alumno es un objeto
 * 
 * @package     CRUD Alumnos
 * @author      Alejandro Peralta Oliva
 * @version     1.0
 * 
 * Tabla alumnos:
 *  - id
 *  - nombre
 *  - apellidos
 *  - email 
 *  - fecha nacimiento (f_nacimiento)
 *  - curso 
 *  - asignatura
 */

// Cargar clases 
require_once __DIR__ . '/class/Alumnos.php';

// Models - no lo necesitaos NO BASE DE DATOS

// Views 
include __DIR__ . '/views/index.view.php';