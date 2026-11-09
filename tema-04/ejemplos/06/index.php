<?php

class Coche
{
    private int $velocidad;
    
    public function __construct()
    {
        $this->velocidad = 0;
    }
    
    public function getVelocidad(): int
    {
        return $this->velocidad;
    }

    public function setVelocidad(int $velocidad): void
    {
        $this->velocidad = $velocidad;
    }
    
    public function aumentarVelocidad(): void
    {
        $this->velocidad++;
    }
    
    public function parar(): void
    {
        $this->velocidad = 0;
    }
}

$coche = new Coche();
$coche -> setVelocidad(1000);
echo $coche -> getVelocidad();

// Hereda los atributos y métodos de la clase padre Coche
Class Deportivo Extends coche {

    #[Override]
    public function aumentarVelocidad(): void
    {
        $this->velocidad = $this->velocidad * 2;
    }
}

$coche_deportivo = new Deportivo();

$coche_deportivo -> parar();

$coche_deportivo -> setVelocidad(300);

$coche_deportivo -> aumentarVelocidad();

echo $coche_deportivo -> getVelocidad();