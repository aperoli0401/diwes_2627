<?php

// Vista
include 'Views/view.resultado.php';

// Declaramos las variables
$velocidad_inicial = 0;
$aceleracion = 0;
$tiempo = 0;
$masa = 0;


// Formulas y calculos matemáticos
$velocidad_final = $velocidad_inicial + ($aceleracion * $tiempo);

$espacio_recorrido = ($velocidad_inicial * $tiempo) + ((1/2) * $aceleracion * pow($tiempo, 2));

$fuerza_neta = $masa * $aceleracion;

$energia_cinetica = 1/2 * $masa * $aceleracion;


?>