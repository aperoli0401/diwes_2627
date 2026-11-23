<?php 

/**
 * Archivo : TablaAlumnos.php
 * Descripción : Clase TablaArticulos, se trata de un array de objetos de la clase Alumnos
 * Caracteristicas : POO sin encapsulamiento
 * Atributos : 
 *  - talumnos []
 * Métodos:
 *  - constructor
 *  - create()
 *  - read()
 *  - update()
 *  - delete()
 *  - addAlumnos()
 *  - getCursos()
 *  - getAsignaturas()
 *  - getIndiceById()   
 *  - indices_asignaturas_a_nombres()
 */

// Tabla que va a contener un array de objetos de la clase Alumnos
class TablaAlumnos{
    public ?array $talumnos;

    public function __construct()
    {
        $this->talumnos = [];
    }

    /**
     * Método Create()
     * Añade un alumno mas al final de array
     */
    public function create(Alumno $alumno):void
    {
        $this->talumnos[] = $alumno;
    }

    /**
     * Método read(int $indice)
     * Devuelve el objeto Alumno situado en esa posición, o null si no existe
     */
    public function read(int $indice): ?Alumno // Asi conseguimos que se acepten valores nulos para alumno 
    {
        return $this->talumnos[$indice] ?? null;
    }

    public function update(int $indice, Alumno $alumno): void
    {
        // Array_replace() sustituye solo si la clace existe en $this->alumnos
        $this->talumnos = array_replace($this->talumnos, [$indice => $alumno]);
    }

    public function delete(int $indice): void
    {
        // array_diff-key() elimina la clave indicada sin necesidad de comprobar isset() con if
        $sinElemento = array_diff_key($this->talumnos, [$indice => null]);
        $this->talumnos = array_values($sinElemento);
    }

    public function getIndiceById(int $id): ?int
    {
        $ids = array_column($this->talumnos, 'id'); 
        $indice = array_search($id, $ids, true);

        return ($indice === false) ? null : $indice;
    }

    public function indices_asignaturas_a_nombres(?array $indices): array
    {
        $asignaturas = self::getAsignaturas();
        $claves = array_fill_keys(array_map('intval', $indices ?? []), true);
        $seleccionadas = array_intersect_key($asignaturas, $claves);

        return array_values($seleccionadas);
    }

    public static function addAlumnos(): array
    {
        return [
            new Alumno(
                1,
                'Lucía',
                'Martínez Ruiz',
                'lucia.martinez@example.com',
                '2004-03-15',
                3,          // 2DAW
                [0, 1, 3]   // DWES, DWEC, HLC
            ),
            new Alumno(
                2,
                'Javier',
                'Gómez Pérez',
                'javier.gomez@example.com',
                '2005-11-28',
                2,          // 1DAW
                [1, 5]      // DWEC, Diseño de Interfaces
            ),
            new Alumno(
                3,
                'Sofía',
                'Navarro López',
                'sofia.navarro@example.com',
                '2003-07-09',
                3,          // 2DAW
                [0, 2, 4]   // DWES, Despliegue de Aplicaciones, EINEM
            ),
            new Alumno(
                4,
                'Mateo',
                'Sánchez Díaz',
                'mateo.sanchez@example.com',
                '2006-01-20',
                0,          // 1SMR
                [2]         // Despliegue de Aplicaciones
            ),
        ];
    }

    public static function getCursos(): array
    {
        return [
            0 => '1SMR',
            1 => '2SMR',
            2 => '1DAW',
            3 => '2DAW',
            4 => '1AD',
            5 => '2AD',
        ];    
    }

    public static function getAsignaturas(): array
    {
        return [
            0 => 'DWES',
            1 => 'DWEC',
            2 => 'Despliegue de Aplicaciones',
            3 => 'HLC',
            4 => 'EINEM',
            5 => 'Diseño de Interfaces',
        ];
    }
}