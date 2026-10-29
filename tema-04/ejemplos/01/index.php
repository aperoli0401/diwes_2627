<?php

/*
    Ejemplo 41
    Crear la clase Persona con los atributos nombre, edad y sexo. 
    Crear un método constructor que inicialice los atributos de la clase.
    Craer un método que muestre los datos de la persona.
    Crear un objeto de la clase Persona y mostrar sus datos.
*/

class Persona {
    // propiedades o atributos 
    public ?string $nombre;
    public ?int $edad;
    public ?string $sexo;


    public function __construct(){
        $this -> nombre = null;
        $this -> edad = null;
        $this -> sexo = null;
    }
}


// Creamos un objeto a partir de la clase persona

$persona1 = new Persona();

var_dump($persona1);
