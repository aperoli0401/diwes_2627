<?php

// Rutas absolutas
require_once __DIR__ . '/class/Cliente.php';

// Crear un objeto de la clase Cliente con los valores:
// Inforsierra, ubrique, 12123456Z
$c1 = new Cliente('Infosierra', 'Ubrique', '12123456Z');

var_dump($c1);

$c1->setNombre('Ladrillos Margari');
$c1->setPoblacion('Ubrique');
$c1->setDni('11111111A');

var_dump($c1);

echo $c1->getNombre();
echo '<br>';
echo $c1->getPoblacion();
echo '<br>';
echo $c1->getDni();
echo '<br>';

$c2 = new Cliente();
var_dump($c2);