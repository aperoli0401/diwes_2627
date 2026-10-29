<?php

/*
    Descripción : En este codigo vamos a almacenar las fuciones que vamos a utilizar en el código
        - generar_tabla_articulos() : devolverá una tabla de 5 articulos en forma de tabla
        - generar_tabla_categorias() : devolverá una tabla con todas las categorias que tiene la tabla original
        - get_indice_articulo_por_id (): con esta podremos obtener el indice del articulo gracias al id del mismo
*/

function generar_tabla_articulos()
{
    // Array de articulos
    $articulos = [
        [
            'id' => 1,
            'Descripcion' => 'Portátil - HP 15-DB0074NS',
            'Modelo' => 'HP 15-DB0074NS',
            'Categoria' => 'Portátil',
            'Unidades' => 120,
            'Precio' => 379.00
        ],
        [
            'id' => 2,
            'Descripcion' => 'Portátil AMD A4-9125, 8 GB RAM, 125 GB',
            'Modelo' => 'HP 255 G7, 15.6',
            'Categoria' => 'Portátil',
            'Unidades' => 200,
            'Precio' => 20.50
        ],
        [
            'id' => 3,
            'Descripcion' => 'PC sobremesa - Lenovo Intel Core i3-8100',
            'Modelo' => 'ideacentre 510S-07ICB',
            'Categoria' => 'PC sobremesa',
            'Unidades' => 50,
            'Precio' => 12.95
        ],
        [
            'id' => 4,
            'Descripcion' => 'Componente - Tarjeta Gráfica NVIDIA GTX 1650',
            'Modelo' => 'GTX 1650 OC 4GB',
            'Categoria' => 'Componente',
            'Unidades' => 30,
            'Precio' => 159.99
        ],
        [
            'id' => 5,
            'Descripcion' => 'Impresora Multifunción Inyección Tinta',
            'Modelo' => 'HP DeskJet 2720e',
            'Categoria' => 'Impresora',
            'Unidades' => 15,
            'Precio' => 49.90
        ]
    ];

    return $articulos;
}

function generar_tabla_categorias()
{
    return ['Portátil', 'PC sobremesa', 'Componente', 'Pantalla', 'Impresora'];
}

function get_indice_articulo_por_id(){
    $id = $_GET['id'] ?? null;
    $articulo_a_editar = null;
    $categorias = generar_tabla_categorias();

    foreach ($_SESSION['articulos'] as $articulo) {
        if ($articulo['id'] == $id) {
            $articulo_a_editar = $articulo;
            break;
        }
    }
}

function añadir_articulo()
{
    // Generar nuevo ID autoincremental basado en los elementos actuales
    $nuevo_id = count($_SESSION['articulos']) + 1;

    $nuevo_articulo = [
        'id' => $nuevo_id,
        'Descripcion' => $_POST['Descripcion'],
        'Modelo' => $_POST['Modelo'],
        'Categoria' => $_POST['Categoria'],
        'Unidades' => (int) $_POST['Unidades'],
        'Precio' => (float) $_POST['Precio']
    ];

    return $nuevo_articulo;
}


function modificar_articulo(){
    $id = $_POST['id'];
    foreach ($_SESSION['articulos'] as &$articulo) {
        if ($articulo['id'] == $id) {
            $articulo['Descripcion'] = $_POST['Descripcion'];
            $articulo['Modelo'] = $_POST['Modelo'];
            $articulo['Categoria'] = $_POST['Categoria'];
            $articulo['Unidades'] = (int)$_POST['Unidades'];
            $articulo['Precio'] = (float)$_POST['Precio'];
            break;
        }
    }
}