<?php

/*is_null() 
    Devuelve verdadero:
    - Asignar el valor nulo a la variavble
    - Cuando la variable no ha sido definida
    - Cuando esta definida sin valor asignado
    - Cuando la variable se ha eliminado con unset()
*/

/*  isset(): determina si una variable está declarada y no es nula.
    Devuelve verdadero:
    - Cuando la variable ha sido definida
    - Cuando la variable no es nula
*/

/*  empty(): determina si una variable está vacía.
    Devuelve verdadero:
    - Cuando la variable no ha sido definida
    - Cuando la variable es nula
    - Cuando la variable es una cadena vacía
    - Cuando la variable es cero (0)
*/

$var = 23;

if (isset($var)) {
    echo "La variable está definida.";
} else {
    echo "La variable no está definida.";
}


$var1 = 10;
if (is_null($var1)) {
    echo "La variable ha sido definida.";
} else {
    echo "La variable no ha sido definida.";
}

$var2 = null;

if (is_null($var2)) {
    echo "La variable ha sido definida.";
} else {
    echo "La variable no ha sido definida.";
}


$var3 = 0;
if (empty($var3)) {
    echo "La variable ha sido definida.";
} else {
    echo "La variable no ha sido definida.";
}