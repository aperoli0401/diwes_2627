<?php

/**
 * Fichero : Alumnos.php
 * @author: Alejandro Peralta Oliva 
 * @fecha : 19/11/2026
 * @proyecto : proyecto 43
 */

/**
 * clase Alumnos
 * 
 * @description : Clase que representa un alumno con propiedades métodos para manejar su información. Tiene que cumplir la propiedad de encapsulamiento
 * 
 * @atributos : 
 *  - id : Identificador único del alumno
 *  - nombre : Nombre del alumno
 *  - apellidos : Apellidos del alumno
 *  - email : Correo electrónico
 *  - f_nacimiento : Fecha de nacimiento en formato AAAA-MM-DD
 *  - curso : Índice del curso
 *  - asignaturas : array de índices de las asignaturas en las que esta matriculado
 * 
 * @métodos : 
 *  - constructor : permite crear un alumno indicando todos sus atributos
 *  - getEdad : devuelve la edad actual del alumno, calculada a partir de f_nacimiento
 */

class Alumno
{
    public ?int $id;
    public ?string $nombre;
    public ?string $apellidos;
    public ?string $email;
    public ?string $f_nacimiento;
    public ?int $curso;
    public ?array $asignaturas;

    public function __construct(
        ?int $id = null,
        ?string $nombre = null,
        ?string $apellidos = null,
        ?string $email = null,
        ?string $f_nacimiento = null,
        ?int $curso = null,
        ?array $asignaturas = [], // En lugar de null declaramos el array vacío
    ) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
        $this->f_nacimiento = $f_nacimiento;
        $this->curso = $curso;
        $this->asignaturas = $asignaturas;
    }

    // Creamos el método getEdad()

    public function getEdad(): int
    {
        $nacimiento = new DateTime($this->f_nacimiento);
        $hoy = new DateTime();
        // La propiedad ->y devuelve solo los años completos transcurridos
        return $nacimiento->diff($hoy)->y;
    }

}