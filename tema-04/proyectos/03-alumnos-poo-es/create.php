<?php

/*
    controlador: create.php
    descripción: Añade un nuevor artículo al  array de artículos.
*/

// 1. Cargamos las clases 
require_once __DIR__ . '/class/Alumnos.php';
require_once __DIR__ . '/class/TablaAlumnos.php';

// 2. Recogemos los datos enviados por POST con ?? null y convertimos curso a (int)
$nombre = $_POST['nombre'] ?? null;
$apellidos = $_POST['apellidos'] ?? null;
$email = $_POST['email'] ?? null;
$f_nacimiento = $_POST['f_nacimiento'] ?? null;
$curso = isset($_POST['curso']) ? (int) $_POST['curso'] : null;
// Si no se marca ninguna casilla, $_POST['asignaturas'] no existe; asignamos []
$asignaturas_alumno = array_map('intval', $_POST['asignaturas'] ?? []);

// 3. Asignamos un id fijo al nuevo alumno 
$id = 5;

// 4. Creamos el objeto Alumno con todos los datos recibidos
$alumno = new Alumno(
    $id,
    $nombre,
    $apellidos,
    $email,
    $f_nacimiento,
    $curso,
    $asignaturas_alumno
);

// 5. Creamos la tabla, cargamos los alumons de prueba y añadimos el nuevo con create()
$tabla_alumnos = new TablaAlumnos();
$tabla_alumnos->talumnos = TablaAlumnos::addAlumnos();
$tabla_alumnos->create($alumno);

// 6. Obtenemos alumnos, cursos y asignaturas y cargamos la vista del listado
$alumnos = $tabla_alumnos->talumnos;
$cursos = TablaAlumnos::getCursos();
$asignaturas = TablaAlumnos::getAsignaturas();

require_once __DIR__ . '/views/index.view.php';