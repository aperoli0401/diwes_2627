/*
    Actividad : 2.2.1
    Descripción : conversión de datos en expresiones
        - Multiplica valor entero con una cadena que contiene un número inicial
        - Sumar valor entero con cadena con número inicial
        - Sumar valor entero con valor float
        - Concatenar valor entero con cadena
        - Sumar valor entero con valor booleano
    Alumno : Alejandro Peralta
    Fecha : 07/10/2026
*/

<?php
    $mult_string = 5 * "10 objetos";
    $suma_string = 10 * "20 productos";
    $suma_float = 7 + 3.5;
    $concat = 15 . "unidades";
    $suma_bool = 8 + true;

// Vista de la aplicación - html 
include 'view.index.php';