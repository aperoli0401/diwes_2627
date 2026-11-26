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
 *  Tlibros: array de objetos de la clase 'Libro'.
 * 
 * Métodos : 
 *  constructor: inicializa el array de libros.
 *  create(): recibe un objeto de tipo 'Libro' y lo agrega al array de libros.
 *  read(): devuelve el libro de la posición indicada en el array de libros.
 *  update(): recibe un objeto de tipo 'Libro' y la posición en el array de libros, y actualiza el libro en esa posición.
 *  delete(): recibe la posición en el array de libros y elimina el libro en esa posición.
 *  addLibros(): actualiza el array de libros con la menos 5 libros de ejemplo, con datos ficticios.
 *  getCategorias(): devuelve un array con las categorías predefinidas. Ha de ser de tipo estático.
 *  getEtiquetas(): devuelve un array con las etiquetas predefinidas. Ha de ser de tipo estático.
 *  getIndiceById(): recibe un id y devuelve el índice del libro en el array de libros, si no lo encuentra devuelve null.
 *  indice_etiquetas_a_nombres(): recibe un array de índices de etiquetas y devuelve un array con los nombres de las etiquetas correspondientes.
 */

Class TablaLibros{
    public array $Tlibros;

    public function __construct() {
        $this->Tlibros = [];
    }

    public function create(Libros $libro): void {
        $this->Tlibros[] = $libro;
    }

    public function read(int $indice): ?Libros {
        return $this->Tlibros[$indice] ?? null;
    }

    public function update(int $indice, Libros $libro): void {
         $this->Tlibros = array_replace($this->Tlibros, [$indice => $libro]);
    }

    public function delete(int $indice): void {
        unset($this->Tlibros[$indice]);
        $this->Tlibros = array_values($this->Tlibros);
    }

    public static function addLibros(): void{
        $this->Tlibros = [
        $libro1 = new Libros(1, "El Gran Gatsby", "1925-04-10", "F. Scott Fitzgerald", "Novela", ["Clásico", "Romance"], 10, 15.99),
        $libro2 = new Libros(2, "1984", "1949-06-08", "George Orwell", "Distopía", ["Ciencia ficción", "Política"], 5, 12.99),
        $libro3 = new Libros(3, "Cien Años de Soledad", "1967-05-30", "Gabriel García Márquez", "Realismo mágico", ["Literatura latinoamericana"], 8, 18.50),
        $libro4 = new Libros(4, "Matar a un Ruiseñor", "1960-07-11", "Harper Lee", "Novela", ["Clásico", "Racismo"], 12, 14.99),
        $libro5 = new Libros(5, "El Señor de los Anillos: La Comunidad del Anillo", "1954-07-29", "J.R.R. Tolkien", "Fantasía épica", ["Aventura", "Épico"], 7, 25.00)
        ];
    }

    public static function getCategorias(): array{
        return ["Novela", "Distopía", "Realismo mágico", "Fantasía épica", "Ciencia ficción"];
    }

    public static function getEtiquetas(): array {
        return ["Clásico", "Romance", "Ciencia ficción", "Política", "Literatura latinoamericana", "Racismo", "Aventura", "Épico"];
    }

}