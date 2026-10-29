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
$buscar_articulo = get_indice_articulo_por_id();

// vista 
require_once 'views/edit.view.php';