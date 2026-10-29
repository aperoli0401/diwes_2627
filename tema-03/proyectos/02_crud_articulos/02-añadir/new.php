<?php

/*
    Alejandro Peralta Oliva
    Proyecto 3.2 - CRUD articulos

    Descripción : gestionar una matriz de productos infomáticos teniendo en cuenta los siguientes requisitos:      
*/

// Cargamos librerias
require_once 'libs/functions.php';

// models

// negociado 
$categorias = generar_tabla_categorias();

// vista 
require_once 'views/new.view.php';