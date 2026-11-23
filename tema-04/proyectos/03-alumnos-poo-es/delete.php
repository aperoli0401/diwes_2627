<?php

/*
    controladdor: delete.php
    
    descripción: elimina un articulo de la tabla a partir de  su id y redirige a la página principal.

    parámetro  URL (GET):

        - id: identificador del artículo a editar.
*/

// 1. Cargamos las clases
require_once __DIR__ . '/class/Alumnos.php';
require_once __DIR__ . '/class/TablaAlumnos.php';

// 2. Leemos el id de la URL
$id = (int) ($_GET['id'] ?? 0);

// 3. Creemos la tabla y cargamos los alunos de prueba
$tabla_alumnos = new TablaAlumnos();
$tabla_alumnos->talumnos = TablaAlumnos::addAlumnos();

// 4. Obtenemos la posición del alumno en el array con getIndiceById()
$indice = $tabla_alumnos->getIndiceById($id);

// 5. Eliminamos el alumno en esa posición
$tabla_alumnos->delete($indice ?? -1 );

// 6. Obtenemos alumnos, cusrsos asignaturas
$alumnos = $tabla_alumnos->talumnos;
$cursos = TablaAlumnos::getCursos();
$asignaturas = TablaAlumnos::getAsignaturas();

// 7. Cargamos la vista index.view.php
require_once __DIR__ . '/views/index.view.php';