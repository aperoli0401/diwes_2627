<?php

/**
 * 
 * Ejemplo : consexión mysqli estilo procedural
 * Base de datos : dwes_tienda
 * Usuario : user_dwes_tienda
 * Contraseña : 123456
 * Obtener todos los productos de la tabla productos
 */

/**
 * 
 * Parámetros de conexión:
 * 1. Servidor : localhost
 * 2. Usuario : user_dwes_tienda
 * 3. Contraseña : 123456
 * 4. Base de datos : dwes_tienda
 */

$conexion = mysqli_connect('localhost', 'user_dwes_tienda', '123456', 'dwes_tienda');
$resultado = mysqli_query($conexion, 'SELECT * FROM productos');

var_dump($resultado);   