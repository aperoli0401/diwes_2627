<?php

/*
    fichero : Alumnos.php
    @author : Alejandro Peralta Oliva
    @fecha : 19/11/2026
    @proyecto : proyecto43
*/

/**
 * Clase Alumnos
 * 
 * @description Clase que representa un alumno con propiedades y métodos para manejar la información.
 * 
 * @atributos:
 *  - $id : Identificador único del alumno.
 *  - $nombre : Nombre del alumno.
 *  - $apellidos : Apellidos del alumno.
 *  - $email : Email del alumno.
 *  - $f_nacimiento : Fecha de nacimiento del alumno.
 *  - $curso : Curso del alumno.
 *  - $asignatura : Selecciona las asignaturas que tiene el alumno.
 * 
 * @métodos :
 *  - constructor : parámetros opcionales
 *  - getEdad(): devolverá la edad de un alumno a partir de su fecha de nacimiento
 */

Class Alumnos {

    public ?int $id;
    public ?string $nombre;
    public ?string $apellidos;
    public ?string $email;
    public ?int $f_nacimiento;
    public ?array $curso;
    public ?array $asignatura;

    public function __construct(       
        ?int $id = null,
        ?string $nombre = null,
        ?string $apellidos = null,
        ?string $email = null,
        ?int $f_nacimiento = null,
        ?array $curso = [],
        ?array $asignatura = []
    ) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
        $this->f_nacimiento = $f_nacimiento;
        $this->curso = $curso;
        $this->asignatura = $asignatura;
    }
}