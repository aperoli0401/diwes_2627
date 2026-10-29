<?php

/*
    Ejemplo 32. if, else, elseif y operador ternario
    Descripcioón: Determinar el item de califiación de un examen

    La calificación sera:
        - suspenso
        - suficiente
        - bien 
        - notable
        - sobresaliente
* */

$nota = 7;

if ($nota < 0){
    echo "Error: La nota debe estar entre 0 y 10";
}elseif ($nota < 5){
    echo "suficiente";
}elseif ($nota == 6){
    echo "bien";
}elseif ($nota == 7 || $nota == 8){
    echo "notable";
}elseif ($nota == 9 || $nota == 10){
    echo "sobresaliente";
}else {
    echo "ERROR";
}
