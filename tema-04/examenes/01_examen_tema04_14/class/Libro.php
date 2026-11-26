<?php

/**
 * Libro.php
 * 
 * @author : Alejandro Peralta Oliva
 * @date : 25/11/2026
 * @version : 1.0
 * 
 * Clase libros 
 * Atributos :
 *  - id
 *  - titulo 
 *  - fecha_publicacion
 *  - autor
 *  - categoria
 *  - etiquetas
 *  - numero_paginas
 *  - stock 
 *  - precio
 * 
 * Métodos : 
 *  __ Constructor
 */

Class Libros{
    public ?int $id;
    public ?string $titulo;
    public ?string $fecha_publicacion;
    public ?string $autor;
    public ?string $categoria;
    public ?array $etiquetas;
    public ?int $stock;
    public ?float $precio;

    public function __construct(
        ?int $id,
        ?string $titulo,
        ?string $fecha_publicacion,
        ?string $autor,
        ?string $categoria,
        ?array $etiquetas,
        ?int $stock,
        ?float $precio
    ) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->fecha_publicacion = $fecha_publicacion;
        $this->autor = $autor;
        $this->categoria = $categoria;
        $this->etiquetas = $etiquetas;
        $this->stock = $stock;
        $this->precio = $precio;
    }
}