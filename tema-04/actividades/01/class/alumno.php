<?php

/*
    Clase : Alumno

    Atributos:
        - id
        - nombre
        - apellidos
        - poblacion
        - email
        - telefono 
        - curso
*/

class Alumno {
    private $id;
    private $nombre;
    private $apellidos;
    private $poblacion;
    private $email;
    private $telefono;
    private $curso;

    public function __construct($id = null, $nombre = null, $apellidos = null, $poblacion = null, $email = null, $telefono = null, $curso = null) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->poblacion = $poblacion;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->curso = $curso;
    }

    // Getters y Setters
    public function getId() { return $this->id; }
    public function setId($id) { $this->id = $id; }

    public function getNombre() { return $this->nombre; }
    public function setNombre($nombre) { $this->nombre = $nombre; }

    public function getApellidos() { return $this->apellidos; }
    public function setApellidos($apellidos) { $this->apellidos = $apellidos; }

    public function getPoblacion() { return $this->poblacion; }
    public function setPoblacion($poblacion) { $this->poblacion = $poblacion; }

    public function getEmail() { return $this->email; }
    public function setEmail($email) { $this->email = $email; }

    public function getTelefono() { return $this->telefono; }
    public function setTelefono($telefono) { $this->telefono = $telefono; }

    public function getCurso() { return $this->curso; }
    public function setCurso($curso) { $this->curso = $curso; }
}