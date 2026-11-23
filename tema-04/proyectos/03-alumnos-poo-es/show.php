<?php

/*
    controladdor: show.php
    
    descripción: muestra los alumnos de la tabla alumnos.

*/


// 1. Cargamos las clases
require_once __DIR__ . '/class/Alumnos.php';
require_once __DIR__ . '/class/TablaAlumnos.php';

// 2. Leemos el id de la URL
$id = (int) ($_GET['id'] ?? 0);

// 3. Creemos la tabla y cargamos los alunos de prueba
$tabla_alumnos = new TablaAlumnos();
$tabla_alumnos->talumnos = TablaAlumnos::addAlumnos();

// 4. OBtenemos la posición con getIndiceById() y el objeto Alumno con read()
$indice = $tabla_alumnos->getIndiceById($id);
$alumno = $tabla_alumnos->read($indice ?? -1) ?? new Alumno();

// 5. OBtenemos cursos y asignaturas
$cursos = TablaAlumnos::getCursos();
$asignaturas = TablaAlumnos::getAsignaturas();

// 6. Incluimos la vista 
require_once __DIR__ . '/views/show.view.php';