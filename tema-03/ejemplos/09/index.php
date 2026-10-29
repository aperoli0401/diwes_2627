<?php

/*
    Parametros por valor o referencia
        - Por valor : 
            - Se pasa una copia del valor de la variable a la función.
            - Cualquier cambio realizado en el parámetro dentro de la función no afectará a la variable original.
        - Por referencia:
            - Se pasa la referencia de la variable a la función.
            - Cualquier cambio realizado en el parámetro dentro de la función afectará a la variable original.
*/

// Parametro por valor
function sumar_uno($x){
    $x++;
    return $x;
}

$a = 2;
echo sumar_uno($a); // 3
echo $a; // 2, la variable original no se modifica

// Parametros por referencia
function suma_dos(&$x){
    $x += 2;
    return $x;
}

$a = 2;
echo sumar_dos($a); // 4
echo $a; // 3, la variable original no se modifica