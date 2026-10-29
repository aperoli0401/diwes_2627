<?php

/*
    Alejandro Peralta Oliva
    Proyecto 3.2 - CRUD articulos

    Descripción : gestionar una matriz de productos infomáticos teniendo en cuenta los siguientes requisitos:      
*/

// Cargamos librerias
require_once 'libs/funciones_articulos.php';

// models

// negociado 
$nuevo_articulo = añadir_articulo();

// vista 
require_once 'views/crete.view.php';