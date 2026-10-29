<?php

/*

    Proyecto : proyecto 2.1 - calculadora básica
    Descripción : Calculadora de operaciones básicas
        - suma
        - resta
        - multiplicación
        - división
        - potencia
        - ....
    Alumno : Alejandro Peralta Oliva
    Fecha : 05/10/2026
*/

// Modelo

// Negociado
// Recoger los valores del formulario
$valor1 = (float) $_POST['valor1'];
$valor2 = (float) $_POST['valor2'];

// Realizar la operación de suma
$resultado = $valor1 * $valor2;

$operacion = "Multiplica";

// Vista
include 'views/resultado.view.php';