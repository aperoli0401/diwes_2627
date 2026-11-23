<?php

/*
    controladdor: update.php
    
    descripción: actualiza  los detalles de un artículo en la tabla de artículos.

    parámetro  GET:

        - id: identificador del artículo a editar.
*/


// 1. Cargamos las clases
require_once __DIR__ . '/class/Alumnos.php';
require_once __DIR__ . '/class/TablaAlumnos.php';

// 2. Leemos el id de la URL (GET) y el resto de datos del formulario (POST)
$id = (int) ($_GET['id'] ?? 0);
$nombre = $_POST['nombre'] ?? null;
$apellidos = $_POST['apellidos'] ?? null;
$email = $_POST['email'] ?? null;
$f_nacimiento = $_POST['f_nacimiento'] ?? null;
$curso = isset($_POST['curso']) ? (int) $_POST['curso'] : null;
$asignaturas_alumno = array_map('intval', $_POST['asignaturas'] ?? []);

// 3. Creamos un nuevo objeto Alumno con el mismo id y los datos actualizados
$alumno_actualizado = new Alumno(
    $id,
    $nombre,
    $apellidos,
    $email,
    $f_nacimiento,
    $curso,
    $asignaturas_alumno
);

// 4. Creamos la tabla y cargamos los alumnos de prueba
$tabla_alumnos = new TablaAlumnos();
$tabla_alumnos->talumnos = TablaAlumnos::addAlumnos();

// 5. Obtenemos la posición en el array a partir del id
$indice = $tabla_alumnos->getIndiceById($id);

// 6. Sustituimos el alumno en esa posición con update()
$tabla_alumnos->update($indice ?? -1, $alumno_actualizado);

// 7. Obtenemos alumnos, cusrsos asignaturas
$alumnos = $tabla_alumnos->talumnos;
$cursos = TablaAlumnos::getCursos();
$asignaturas = TablaAlumnos::getAsignaturas();

// 8. Cargamos la vista index.view.php
require_once __DIR__ . '/views/index.views.php';