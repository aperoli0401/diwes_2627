<?php

/*
    Archivo : Tarticulo.php
    Descripción : Clase Tarticulos, se trata de una array de objetos de la clase Articulo.
    Características : POO con encapsulamiento.
    Atributos : 
        - tarticulos []
    Métodos : 
        - constructor
        - getters
        - setters
        - getMarcas()
        - getCategorias()

*/

// Tabla que va a contener un array de objetos de la clase Articulo
class Tarticulos {
    
    private ?array $tarticulos;

    public function __construct(){
        $this->tarticulos = [];
    }

    // Getters y setters
    /**
     * Get the value of tarticulos
     */
    public function getTarticulos(): ?array
    {
        return $this->tarticulos;
    }

    /**
     * Set the value of tarticulos
     */
    public function setTarticulos(?array $tarticulos): self
    {
        $this->tarticulos = $tarticulos;

        return $this;
    }

    /*
        Método getMarcas()
        Descripción: Devuelve un array con todas las marcas de artículos disponibles
        Con este array tengo que generar el select dinámico del campo marca.
        Cuando estemos trabajando con base de datos : SELECT * FROM marcas order by id.
    */

    static public function getMarcas(): ?array {
        $marcas = [
            'Samsung',
            'Apple',
            'Xiaomi',
            'Huawei',
            'Motorola',
            'Nokia',
            'Sony',
            'LG',
            'Oppo',
            'Realme',
            'Vivo',
            'OnePlus' 
        ];
        return $marcas;
    }

    /*
        Método getCategorias()
        Descripción : Devuelve un array con todos los tipos de categorias disponibles
        Con este array tengo que generar una lista de checkbox dinámico del campo categoria.
        Cuando estemmos trabajando con base de datos : SELECT id, categoria FROM 
    */

    static function getCategorias(): ?array {
        $categorias = [
            'Smartphone',
            'Tablet',
            'Portátil',
            'Televisor',
            'Auriculares',
            'Altavoces',
            'Cámara',
            'Reloj inteligente',
            'Consola de videojuegos',
            'Electrodoméstico'
        ];
        return $categorias;
    }

    /**
     * Método addArticulos()
     * Descripción : Devuelve un array con todos los artículos disponibles
     */

    public function addArticulos() {
        // Crear un objeto de la clase Articulo
        $articulo = new Articulo(
            1,
            'Smartphone Samsung Galaxy s21',
            'S21',
            0,
            [0, 2, 3],
            5,
            12.45
        );

        $this->tarticulos[] = $articulo;

        // Añadir mas artículos al array
        $this->tarticulos[] = new Articulo(
            2,
            'iPhone 13 Pro Max',
            '13 Pro Max',
            1,
            [0, 2, 3],
            10,
            15.99
        );

        $this->tarticulos[] = new Articulo(
            3,
            'Xiaomi Mi 11',
            'Mi 11',
            2,
            [0, 2, 3],
            8,
            9.99
        );

        $this->tarticulos[] = new Articulo(
            4,
            'Huawei P40 Pro',
            'P40 Pro',
            3,
            [0, 2, 3],
            6,
            11.99
        );

        $this->tarticulos[] = new Articulo(
            5,
            'Motorola Edge Plus',
            'Edge Plus',
            4,
            [0, 2, 3],
            4,
            13.99
        );

        $this->tarticulos[] = new Articulo(
            6,
            'Nokia 8.3 5G',
            '8.3 5G',
            5,
            [0, 2, 3],
            7,
            10.99
        );

        return $this->tarticulos;
    }

    /**
     * Método get_indice_categorias_a_nombre()
     * Descripción : Devuelve un array con los nombres de las categorias a partir de los indices
     */
    public function get_indice_categorias_a_nombre(array $indices): ?array {
        $categorias = self::getCategorias();
        $nombres_categorias = [];
        foreach ($indices as $indice) {
            if (isset($categorias[$indice])) {
                $nombres_categorias[] = $categorias[$indice];
            }
        }
        return $nombres_categorias;
    }
}