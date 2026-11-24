<?php

/*
    controladdor: edit.php
    
    descripción: muestra el formulario de edición de un artículo y procesa la actualización del mismo.

    parámetro  GET:
        - id: identificador del artículo a editar.
*/

// 1. Cargamos las clases
require_once __DIR__ . '/class/Alumnos.php';
require_once __DIR__ . '/class/TablaAlumnos.php';

// 2. Leemos el id de la URL (GET) y lo convertimos a entero
$id = (int) ($_GET['id'] ?? 0);

// 3. Creamos la tabla y cargamos los alumnos de prueba
$tabla_alumnos = new TablaAlumnos();
$tabla_alumnos->talumnos = TablaAlumnos::addAlumnos();

// 4. Obtenemos la posición en el array con getIndiceById() y recuperamos el alumno con read()
$indice = $tabla_alumnos->getIndiceById($id);
$alumno = $tabla_alumnos->read($indice ?? -1) ?? new Alumno();

// 5. Obtenemos cursos y asignaturas
$cursos = TablaAlumnos::getCursos();
$asignaturas = TablaAlumnos::getAsignaturas();

// 6. Incluimos la vista de edición
require_once __DIR__ . '/views/edit.view.php';