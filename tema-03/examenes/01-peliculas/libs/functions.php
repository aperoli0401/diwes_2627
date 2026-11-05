<?php 

function get_peliculas() {
    $peliculas = [
        'id' => 1,
        'titulo' => 'Titanic',
        'idioma' => 'Inglés',
        'director' => 'James Cameron',
        'generos' => ['Drama', 'Romántica'],
        'año' => 1997,
        'duracion' => 195,
        'recaudado' => '2.264,7 (M$)'
    ];
    [
        'id' => 2,
        'titulo' => 'Avatar',
        'idioma' => 'Inglés',
        'director' => 'James Cameron',
        'generos' => ['Ciencia ficción', 'Aventura'],
        'año' => 2009,
        'duracion' => 162,
        'recaudado' => '2.923,7 (M$)'
    ];
    [
        'id' => 3,
        'titulo' => 'El Padrino',
        'idioma' => 'Inglés',
        'director' => 'Francis Ford Coppola',
        'generos' => ['Crimen', 'Drama'],
        'año' => 1972,
        'duracion' => 175,
        'recaudado' => '246,1 (M$)'
    ];
    [
        'id' => 4,
        'titulo' => 'La La Land',
        'idioma' => 'Inglés',
        'director' => 'Damien Chazelle',
        'generos' => ['Comedia musical', 'Romántica'],
        'año' => 2016,
        'duracion' => 128,
        'recaudado' => '446,1 (M$)'
    ];
    [
        'id' => 5,
        'titulo' => 'El Señor de los Anillos: El Retorno del Rey',
        'idioma' => 'Inglés',
        'director' => 'Peter Jackson',
        'generos' => ['Aventura', 'Fantasía'],
        'año' => 2003,
        'duracion' => 201,
        'recaudado' => '1.142,0 (M$)'
    ];
    [
        'id' => 6,
        'titulo' => 'Forrest Gump',
        'idioma' => 'Inglés',
        'director' => 'Robert Zemeckis',
        'generos' => ['Drama', 'Romántica'],
        'año' => 1994,
        'duracion' => 142,
        'recaudado' => '677,9 (M$)'
    ];
    return $peliculas;
}

function obtener_id_nueva_pelicula ($peliculas) {

}