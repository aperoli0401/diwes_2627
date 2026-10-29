<?php

/*

    Proyecto : proyecto 2.2 - calculadora básica
    Descripción : Dada la velocidad inicial y el ángulo de lanzamiento, calcular:
        - La altura máxima
        - El tiempo de vuelo
        - La distancia horizontal del proyectil
        - Velocidad inicial horizontal
        - Velocidad inicial vertical
    
    Alumno : Alejandro Peralta Oliva
    Fecha : 06/10/2026
*/

// Modelo

// Negociado
// Creamos la constante de la gravedad 
define("G", 9.81);

// Recojemos los valores del formualario
$velocidad_inicial = (float) $_POST['velocidad_inicial'] ?? 0;
$angulo_lanzamiento = (float) $_POST['angulo_lanzamiento'] ?? 0;

// Convertimos el ángulo de grados a radianes
$angulo_radianes = deg2rad($angulo_lanzamiento);

// Aplicamos las formulas al código
// Calculamos la velocidad inicial horizontal y vertical
$velocidad_inicial_horizontal = $velocidad_inicial * cos($angulo_radianes);
$velocidad_inicial_vertical = $velocidad_inicial * sin($angulo_radianes);

// Calculamos el alcance maximo y la altura maxima
$alcance_maximo = pow($velocidad_inicial, 2) * sin($angulo_radianes * 2) / G;
$altura_maxima = pow($velocidad_inicial, 2) * pow(sin($angulo_radianes), 2) / (G * 2);

// Calculamos el tiempo que tarda el proyectil
$tiempo = (2 * $velocidad_inicial_vertical) / G;

// Formateamos los resultados a 2 decimales 
$velocidad_inicial = number_format($velocidad_inicial, 2 , "," , ".");
$angulo_lanzamiento = number_format($angulo_lanzamiento, 2 , "," , ".");
$angulo_radianes = number_format($angulo_radianes, 2 , "," , ".");$velocidad_inicial_horizontal = number_format($velocidad_inicial_horizontal, 2 , "," , ".");
$velocidad_inicial_vertical = number_format($velocidad_inicial_vertical, 2 , "," , ".");
$altura_maxima = number_format($altura_maxima, 2 , "," , ".");
$alcance_maximo = number_format($alcance_maximo, 2 , "," , ".");
$tiempo = number_format($tiempo, 2 , "," , ".");

// Vista

include 'views/resultado.view.php';