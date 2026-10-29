<?php

// Cargo la librería de funciones matemáticas
include "libs/matematicas.php"; // incluir el archivo de funciones matemáticas

function sumar($a, $b) {
 return $a + $b;
}

function restar($a, $b){
    return $a - $b
}

function multiplicar($a, $b){
    return $a * $b
}

$resultado = sumar(3, 4); // llamada a la función
echo $resultado; // 7

$resta = restar(3,4); // llamada a la función
echo $resta; // -1

$multiplicar = multiplicar(3, 4) // lamada a la función
echo $multiplicar; // 12


