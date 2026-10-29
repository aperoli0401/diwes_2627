<?php

/*
    ejemplo 34. Operador de fusión ??
*/

// Si declaramos la variable nos da cinco y si no aparece el texto de las comillas simples
$a = 5;

$resultado = $a ?? 'No Declarada';

echo $resultado;