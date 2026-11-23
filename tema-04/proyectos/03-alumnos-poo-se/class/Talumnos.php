<?php

/**
 * Archivo : Talumnos.php
 * Descripción : Clase Talumnos, se trata de un array de objetos de la clase Alumnos.
 * Caracteristicas : POO sin encapsulamiento.
 * Atributos : 
 *  -talumnnos []
 * Métodos :
 *  - constructor
 *  - create ()
 *  - read ()
 *  - update ()
 *  - delete ()
 *  - addAlumnos () 
 *  - getAsignaturas ()
 *  - getCursos ()
 */

// Tabla que va a contener un array de objetos de la clase Alumnos
class Talumnos{

    public ?array $talumnos;

    public function __construct(){
        $this->talumnos = [];
    }

    /*
        Método create()
        Descripción : añade un nuevo objeto de usuario a la tabla
    */
    static public function create(){}
}